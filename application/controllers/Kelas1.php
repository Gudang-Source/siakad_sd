<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } elseif ($this->session->userdata('role_id') != 4) {

            redirect('auth');
        }

        $this->load->model('kelas/kelas1_model');
        $this->load->model('score_model');
        $this->load->model('course_model');
        $this->load->model('teachers_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Kelas satu';

        $data['kelas1'] = $this->kelas1_model->kelas1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/kelas1/index', $data);
        $this->load->view('templates/footer');
    }

    public function inputNilai($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Input Nilai Kelas 1';

        $data['students_id'] = $this->kelas1_model->getStudentsById($id);

        $data['inputNilai1'] = $this->kelas1_model->getAllScoreK1();
        // $data['students1'] = $this->kelas1_model->kelas1();
        $data['mapel'] = $this->course_model->getAllCourse();
        $data['teachers'] = $this->teachers_model->getAllTeachers();
        $data['semester'] = $this->db->get('periode')->result_array();

        // var_dump($data['inputK1']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/kelas1/input_nilai', $data);
        $this->load->view('templates/footer');
    }

    public function insertNilai()
    {
        $this->form_validation->set_rules('students_id', 'Nama siswa', 'required');
        $this->form_validation->set_rules('course_id', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('teachers_id', 'Nama guru', 'required');
        $this->form_validation->set_rules('periode_id', 'Semester', 'required');

        if ($this->form_validation->run() == false) {

            redirect('kelas1');
        } else {
            $data = [
                'students_id' => $this->input->post('students_id'),
                'course_id'   => $this->input->post('course_id'),
                'class_id'    => 1,
                'teachers_id' => $this->input->post('teachers_id'),
                'periode_id'  => $this->input->post('periode_id'),
                'daily_test'  => $this->input->post('daily_test'),
                'mid_test'    => $this->input->post('mid_test'),
                'finaly_test' => $this->input->post('finaly_test'),
                'result'      => $this->input->post('result')
            ];

            // var_dump($data);
            // die;

            $this->db->insert('score', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Nilai berhasil di input!</div>');

            redirect('kelas1/insertNilai');
        }
    }
    public function daftarNilai()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Daftar Nilai';
        $data['inputNilai1'] = $this->kelas1_model->getAllScoreK1();
        // $data['students1'] = $this->kelas1_model->kelas1();
        $data['mapel'] = $this->course_model->getAllCourse();
        $data['teachers'] = $this->teachers_model->getAllTeachers();
        $data['semester'] = $this->db->get('periode')->result_array();

        // var_dump($data['inputK1']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/kelas1/daftar_nilai', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Edit Nilai';

        $data['edit'] = $this->kelas1_model->edit($id);
        $data['students1'] = $this->kelas1_model->kelas1();
        $data['mapel'] = $this->course_model->getAllCourse();
        $data['teachers'] = $this->teachers_model->getAllTeachers();
        $data['semester'] = $this->db->get('periode')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/kelas1/edit_nilai', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'students_id' => $this->input->post('students_id'),
            'course_id'   => $this->input->post('course_id'),
            'class_id'    => 1,
            'teachers_id' => $this->input->post('teachers_id'),
            'periode_id'  => $this->input->post('periode_id'),
            'daily_test'  => $this->input->post('daily_test'),
            'mid_test'    => $this->input->post('mid_test'),
            'finaly_test' => $this->input->post('finaly_test'),
            'result'      => $this->input->post('result')

        ];

        $this->db->where('score_id', $id);
        $this->db->update('score', $data);


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Nilai berhasil di update!</div>');

        redirect('kelas1');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Detail nilai';
        $data['detail'] = $this->kelas1_model->detail($id);

        $query = "SELECT SUM(result) as jumlah 
                  FROM score WHERE `students_id` =$id 
                  AND `class_id`=1";

        $data['jumlah'] = $this->db->query($query)->result_array();

        $this->db->where('students_id', $id);
        $this->db->where('class_id', 1);
        $data['jumlahbaris'] = $this->db->get('score')->num_rows();

        // var_dump($data['jumlah']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('students/kelas1/detail', $data);
        $this->load->view('templates/footer');
    }
}
