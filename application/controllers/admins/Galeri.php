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
    public function addfoto()
    {
        // inisiasi validasi
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul Harus Diisi',
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);

        // validasi form
        if ($this->form_validation->run() == false) {
            // jika validasi tidak terjadi
            $email = $this->session->userdata('email');
            $user = $this->db->get_where('smaga_user', ['email' => $email])->row_array();
            $data['id_user'] = $user['id'];
            $data['nama_user'] = $user['nama'];
            $this->session->set_flashdata('breadcrumb', 'Upload Foto');
            $this->session->set_flashdata('menu', 'galeri');
            $this->session->set_flashdata('menuName', 'Upload Foto');
            $this->session->set_flashdata('icon', 'fas fa-images');
            // tampilkan view input berita
            $this->load->view('admin/galeri/addfoto', $data);
            unset($_SESSION['message']);
        } else {
            // jika validasi benar
            $this->_addfoto();
            redirect('admin/galeri/foto', 'refresh');
            // var_dump($this->input->post('programs'));
        }
    }


    public function editfoto()
    {
        // inisiasi validasi
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul Harus Diisi',
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);

        // validasi form
        if ($this->form_validation->run() == false) {
            // jika validasi tidak terjadi
            $id = $this->uri->segment(5);
            $email = $this->session->userdata('email');
            $user = $this->db->get_where('smaga_user', ['email' => $email])->row_array();
            $data['foto'] = $this->db->get_where('smaga_foto', ['id' => $id])->row_array();
            $data['id_user'] = $user['id'];
            $data['nama_user'] = $user['nama'];
            $this->session->set_flashdata('breadcrumb', 'Edit Foto');
            $this->session->set_flashdata('menu', 'galeri');
            $this->session->set_flashdata('menuName', 'Edit Foto');
            $this->session->set_flashdata('icon', 'fas fa-images');
            // tampilkan view input berita
            $this->load->view('admin/galeri/editfoto', $data);
            unset($_SESSION['message']);
        } else {
            // jika validasi benar
            $this->_updatefoto();
            redirect('admin/galeri/foto', 'refresh');
            // var_dump($this->input->post('programs'));
        }
    }

    private function _updatefoto()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $config['upload_path'] = './assets/home/img/portfolio/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            $image = $this->_upload('gambar');
            $this->m_galeri->updatefoto($judul, $deskripsi, $image, $tanggal, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gambar Berhasil di Upload!</div>');
        } else {
            $this->m_galeri->updatefototext($judul, $deskripsi, $tanggal, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto Berhasil di Edit!</div>');
        }
    }



    private function _addfoto()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
        $config['upload_path'] = './assets/home/img/portfolio/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            $image = $this->_upload('gambar');
            $this->m_galeri->addfoto($judul, $deskripsi, $image, $tanggal);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gambar Berhasil di Upload!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak tersedia, mohon tambahkan gambar thumbnail!</div>');
        }
    }


    private function _upload($upload)
    {
        if ($this->upload->do_upload($upload)) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/home/img/portfolio/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            // $config['width'] = 800;
            // $config['height'] = 600;
            $config['new_image'] = './assets/home/img/portfolio/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $imagename = $gbr['file_name'];
            return $imagename;
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error['error'] . '</div>');
            // var_dump($error);

            redirect('admin/galeri/foto', 'refresh');
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(5);
        // var_dump($id);
        $hapus = $this->m_galeri->hapusfoto($id);
        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">berhasil menghapus Foto!</div>');
            redirect('admin/galeri/foto', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus Foto!</div>');
            redirect('admin/galeri/foto', 'refresh');
        }
    }
}
