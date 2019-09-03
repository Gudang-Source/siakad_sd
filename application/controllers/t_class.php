<?php
defined('BASEPATH') or exit('No direct script access allowed');

class T_class extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        $this->load->model('t_class_model');
    }

    public function index()
    {

        $data['title'] = 'Teachers Class';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['teachers_class'] = $this->t_class_model->getAllTc();

        $data['teachers'] = $this->t_class_model->getTeachers();
        $data['class'] = $this->t_class_model->getClass();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('t_class/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {

        $this->form_validation->set_rules('teachers_id', 'Nama Guru', 'required');
        $this->form_validation->set_rules('class_id', 'Nama kelas', 'required');

        if ($this->form_validation->run() == false) {

            redirect('t_class', validation_errors());
        } else {

            $data = [
                'teachers_id' => $this->input->post('teachers_id'),
                'class_id'    => $this->input->post('class_id')
            ];


            $this->db->insert('teachers_class', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data teacher Class has been added!</div>');

            redirect('t_class');
        }
    }

    public function detail($id)
    {

        $data['title'] = 'Detail Teachers Class';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['teachers_class'] = $this->t_class_model->getByTcId($id);

        // var_dump($data['teachers_class']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('t_class/detail', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {

        $this->db->where('tc_id', $id);
        $this->db->delete('teachers_class');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data has been deleted!</div>');

        redirect('t_class');
    }
}
