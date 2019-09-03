<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('email')) {

            return redirect('auth');
        }
        $this->load->model('Students_model');
    }

    public function index()

    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Siakad | List Students';
        $data['students'] = $this->Students_model->getAllStudents();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {

        $query = "SELECT `students`.*, `class`.`class_name` 
                  FROM `students` JOIN `class`
                  ON `students`.`class_id` = `class`. `class_id`
                  WHERE `students_id` = $id";

        $data['user'] = $this->db->get('user')->row_array();
        $data['students'] = $this->db->query($query)->row_array();

        $this->form_validation->set_rules('name_students', 'Student name', 'required');
        $this->form_validation->set_rules('pod', 'Place of Birth', 'required');
        $this->form_validation->set_rules('bod', 'Date of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('religion', 'Religion', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('mother_name', "Mother's name", 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('class_id', 'Class id', 'required');


        if ($this->form_validation->run() == false) {

            $data['title']    = 'Siakad | Edit Student';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/side', $data);
            $this->load->view('students/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nis'               => $this->input->post('nis'),
                'name_students'     => $this->input->post('name_students'),
                'pod'               => $this->input->post('pod'),
                'bod'               => $this->input->post('bod'),
                'gender'            => $this->input->post('gender'),
                'religion'          => $this->input->post('religion'),
                'address'           => $this->input->post('address'),
                'mother_name'       => $this->input->post('mother_name'),
                'phone'             => $this->input->post('phone'),
                'class_id'          => $this->input->post('class_id')
            ];

            $this->db->where('students_id', $id);
            $this->db->update('students', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data student has been edited!</div>');

            redirect('students');
        }
    }

    public function detail($id)
    {

        $data['user'] = $this->db->get('user')->row_array();
        $data['title'] = 'Student | Detail Student';
        $data['students'] = $this->Students_model->getStudentById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/detail', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {

        $this->db->where('students_id', $id);
        $this->db->delete('students');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data student has been deleted!</div>');

        redirect('students');
    }
}
