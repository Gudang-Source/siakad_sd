<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Score extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        $this->load->model('score_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Score';

        $data['kelas'] = $this->db->get('class')->result_array();
        $data['semester'] = $this->db->get('periode')->result_array();
        $data['course'] = $this->db->get('course',)->result_array();

        $data['score'] = $this->score_model->getAllScore();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('score/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Input Nilai Siswa';

        // $this->form_validation->set_rules('');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('score/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->db->where('score_id', $id);
        $this->db->delete('score');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been delete!</div>');

        redirect('score');
    }
}
