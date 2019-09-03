<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_user extends CI_Controller
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

    public function index()
    {
        $data['title'] = 'Add User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get('user')->result_array();


        $data['teachers'] = $this->db->get('teachers')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side', $data);
        $this->load->view('admin/add_user', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $email = $this->input->post('email');
        $data = [
            'name' => $this->input->post('teachers_name'),
            'email' => $this->input->post('email'),
            'image' => "default.jpg",
            'password' => password_hash($this->input->post('nip'), PASSWORD_DEFAULT),
            'role_id' => 5,
            'is_active' => 1,
            'teachers_id' => $this->input->post('teachers_id'),
            'date_created' => date('Y-m-d')
        ];


        // var_dump($data);
        // die;
        if ($this->db->get_where('user', ['email' => $email])->num_rows() < 1) {

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User has been added!</div>');

            redirect('add_user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User already exist</div>');
            redirect('add_user');
        }
    }

    public function delete($id)
    {
        $data = $this->db->where('id', $id);

        $this->db->delete('user', $data);

        $this->session->set_flashdata('delete', '<div class="alert alert-success" role="alert">User has been deleted!</div>');
        redirect('add_user');
    }
}
