<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teachers_course extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        } elseif ($this->session->userdata('role_id') != 4) {

            $data = validation_errors();
            redirect('auth', $data);
        }

        $this->load->model('Teachers_course_model', 'tc_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Teachers Course';
        $data['teachers_course'] = $this->tc_model->getAllTcourse();

        $data['teachers'] = $this->tc_model->getAllTeachers();
        $data['course'] = $this->tc_model->getAllCourse();
        $data['class'] = $this->tc_model->getAllClass();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('course/teachers_course', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {

        $this->form_validation->set_rules('teachers_id', 'Teachers name', 'required');
        $this->form_validation->set_rules('class_id', 'Class name', 'required');
        $this->form_validation->set_rules('course_id', 'Course name', 'required');

        if ($this->form_validation->run() == false) {

            redirect('teachers_course');
        } else {

            $data = [
                'teachers_id' => $this->input->post('teachers_id'),
                'class_id' => $this->input->post('class_id'),
                'course_id' => $this->input->post('course_id')
            ];

            $this->db->insert('teachers_course', $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                    Data has been added!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('teachers_course');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Edit Teachers Course';

        $data['teachers_course'] = $this->tc_model->getTcourseById($id);
        $data['teachers'] = $this->tc_model->getAllTeachers();
        $data['course'] = $this->tc_model->getAllCourse();
        $data['class'] = $this->tc_model->getAllClass();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('course/edit_tcourse', $data);
        $this->load->view('templates/footer');
        $this->form_validation->set_rules('teachers_id', 'teachers', 'required');
        $this->form_validation->set_rules('class_id', 'Class', 'required');
        $this->form_validation->set_rules('course_id', 'Course', 'required');

        if ($this->form_validation->run() == false) {

            return false;
        } else {

            $data = [
                'teachers_id' => $this->input->post('teachers_id'),
                'class_id' => $this->input->post('class_id'),
                'course_id' => $this->input->post('course_id'),
            ];
            $this->db->where('tcourse_id', $id);
            $this->db->update('teachers_course', $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                    Data has been updated!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('teachers_course');
        }
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Detail Teachers Course';


        $data['teachers_course'] = $this->db->get_where('teachers_course', ['tcourse_id' => $id])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('course/edit_tcourse', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->db->where('tcourse_id', $id);
        $this->db->delete('teachers_course');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
                    Data has been deleted!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
        );
        redirect('teachers_course');
    }
}
