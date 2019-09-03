<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } elseif ($this->session->userdata('role_id') != 4) {

            redirect('auth');
        }
    }

    public function newspaper()
    {

        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();


        $data['title'] = 'Newspaper';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side');
        $this->load->view('setting/newspaper', $data);
        $this->load->view('templates/footer');
    }

    public function insertnews()
    {
        $data = $this->input->post('newspaper');
    }
}
