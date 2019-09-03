<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teachers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('teachers_model');
    }

    public function index()
    {

        $data['title'] = 'List Teachers';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['teachers'] = $this->teachers_model->getAllTeachers();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('teachers/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Teacher';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['teachers'] = $this->db->get_where('teachers', ['teachers_id' => $id])->row_array();


        $this->form_validation->set_rules('teachers_name', 'Name', 'required');
        $this->form_validation->set_rules('pod', 'Place of Birth', 'required');
        $this->form_validation->set_rules('bod', 'Date of Birth', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/side', $data);
            $this->load->view('teachers/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'teachers_name' => $this->input->post('teachers_name'),
                'nip'           => $this->input->post('nip'),
                'pod'           => $this->input->post('pod'),
                'bod'           => $this->input->post('bod'),
                'gender'        => $this->input->post('gender'),
                'address'       => $this->input->post('address'),
                'email'         => $this->input->post('email'),
                'phone'         => $this->input->post('phone'),
            ];

            // var_dump($data);
            // die;

            $this->db->where('teachers_id', $id);
            $this->db->update('teachers', $data);


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data teacher has been edited!</div>');

            redirect('teachers');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Teacher';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();



        $data['teachers'] = $this->db->get_where('teachers', ['teachers_id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('teachers/detail', $data);
        $this->load->view('templates/footer');
    }
}
