<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // is_logged_in();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        } elseif ($this->session->userdata('role_id') != 4) {

            redirect('auth');
        }
    }


    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['title2'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['submenu'] = $this->db->get('user_sub_menu')->result_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/side', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'menu' => $this->input->post('menu'),
                'icon_menu' => $this->input->post('icon')
            ];

            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('messagemenu', '<div class="alert alert-success" role="alert">
                Success Added Menu!</div>');
            redirect('menu');
        }
    }

    public function subMenu()
    {

        $data['title2'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');


        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/side', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            // var_dump($data);
            // die;

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('messagesubmenu', '<div class="alert alert-success" role="alert">
                Success Added SubMenu!</div>');
            redirect('menu/index');
        }
    }
}
