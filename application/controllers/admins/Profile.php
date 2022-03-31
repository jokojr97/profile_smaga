<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('m_profile');
        $this->load->helper('file');
        $role_id = $this->session->userdata('role_id');
        if ($role_id == 2) {
        } else if ($role_id == 1) {
            redirect('adminsuper', 'refresh');
        } else {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        $this->session->set_flashdata('breadcrumb', 'Profile');
        $this->session->set_flashdata('menu', 'profile');
        $this->session->set_flashdata('menuName', 'Profile');
        $this->session->set_flashdata('icon', 'fas fa-users');
        $data['profile'] = $this->m_profile->get_profile();
        $this->load->view('admin/profile/index.php', $data);
    }
}
