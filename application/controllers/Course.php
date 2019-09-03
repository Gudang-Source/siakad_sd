<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'List Course';
        $data['course'] = $this->db->get('course')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('course/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('course_code', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('course_name', 'Mata Pelajaran', 'required');

        if ($this->form_validation->run() == false) {

            redirect('course');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        } else {

            $data = [
                'course_code' => $this->input->post('course_code'),
                'course_name' => $this->input->post('course_name')
            ];

            $this->db->insert('course', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Course has been added!</div>');

            redirect('course');
        }
    }
}
