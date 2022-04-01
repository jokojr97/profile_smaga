<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('m_galeri');
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
        redirect('admin/galeri/foto', 'refresh');
    }
    public function foto()
    {
        $this->session->set_flashdata('breadcrumb', 'List Foto');
        $this->session->set_flashdata('menu', 'galeri');
        $this->session->set_flashdata('menuName', 'List Foto');
        $this->session->set_flashdata('icon', 'fas fa-images');

        $data['foto'] = $this->m_galeri->get_foto();

        $this->load->view('admin/galeri/foto', $data);
        unset($_SESSION['message']);
    }
}
