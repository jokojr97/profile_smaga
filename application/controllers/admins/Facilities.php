<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Facilities extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('m_facilities');
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
        $this->session->set_flashdata('breadcrumb', 'List Facilities');
        $this->session->set_flashdata('menu', 'facilities');
        $this->session->set_flashdata('menuName', 'List Facilities');
        $this->session->set_flashdata('icon', 'fas fa-images');

        $data['facilities'] = $this->m_facilities->get_facilities();

        $this->load->view('admin/facilities/index', $data);
        unset($_SESSION['message']);
    }
    public function add()
    {
        // inisiasi validasi
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul Harus Diisi',
        ]);

        // validasi form
        if ($this->form_validation->run() == false) {
            // jika validasi tidak terjadi
            $email = $this->session->userdata('email');
            $user = $this->db->get_where('smaga_user', ['email' => $email])->row_array();
            $data['id_user'] = $user['id'];
            $data['nama_user'] = $user['nama'];
            $this->session->set_flashdata('breadcrumb', 'Add Facilities');
            $this->session->set_flashdata('menu', 'facilities');
            $this->session->set_flashdata('menuName', 'Add Facilities');
            $this->session->set_flashdata('icon', 'fas fa-images');
            // tampilkan view input berita
            $this->load->view('admin/facilities/add', $data);
            unset($_SESSION['message']);
        } else {
            // jika validasi benar
            // $this->_add();
            // redirect('admin/facilities', 'refresh');
            var_dump($this->input->post('programs'));
        }
    }

    public function edit()
    {
        // inisiasi validasi
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul Harus Diisi',
        ]);

        // validasi form
        if ($this->form_validation->run() == false) {
            // jika validasi tidak terjadi
            $id = $this->uri->segment(4);
            $email = $this->session->userdata('email');
            $user = $this->db->get_where('smaga_user', ['email' => $email])->row_array();
            $data['facilities'] = $this->db->get_where('smaga_facilities', ['id' => $id])->row_array();
            $data['id_user'] = $user['id'];
            $data['nama_user'] = $user['nama'];
            $this->session->set_flashdata('breadcrumb', 'Edit Facilities');
            $this->session->set_flashdata('menu', 'facilities');
            $this->session->set_flashdata('menuName', 'Edit Facilities');
            $this->session->set_flashdata('icon', 'fas fa-images');
            // tampilkan view input berita
            $this->load->view('admin/facilities/edit', $data);
            unset($_SESSION['message']);
        } else {
            // jika validasi benar
            $this->_update();
            redirect('admin/facilities', 'refresh');
            // var_dump($this->input->post('programs'));
        }
    }

    private function _update()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $config['upload_path'] = './assets/home/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            $image = $this->_upload('gambar');
            $this->m_facilities->update($judul, $deskripsi, $image, $tanggal, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gambar Berhasil di Upload!</div>');
        } else {
            $this->m_facilities->updatetext($judul, $deskripsi, $tanggal, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Facilities Berhasil di Edit!</div>');
        }
    }

    private function _add()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
        $config['upload_path'] = './assets/home/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            $image = $this->_upload('gambar');
            $this->m_facilities->add($judul, $deskripsi, $image, $tanggal);
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
            $config['source_image'] = './assets/home/img/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            // $config['width'] = 800;
            // $config['height'] = 600;
            $config['new_image'] = './assets/home/img/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $imagename = $gbr['file_name'];
            return $imagename;
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error['error'] . '</div>');
            // var_dump($error);

            redirect('admin/facilities', 'refresh');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(4);
        // var_dump($id);
        $hapus = $this->m_facilities->delete($id);
        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">berhasil menghapus Facilities!</div>');
            redirect('admin/facilities', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus Facilities!</div>');
            redirect('admin/facilities', 'refresh');
        }
    }
}
