<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('m_site');
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
        $this->form_validation->set_rules('title', 'Title', 'required|trim', [
            'required' => 'Judul Harus Diisi',
        ]);
        $this->form_validation->set_rules('slogan', 'Slogan', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);

        $this->form_validation->set_rules('address', 'Address', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('description', 'Description', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('facebook', 'Facebook', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('tiktok', 'Tiktok', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('instagram', 'Instagram', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('whatsapps', 'Whatsapps', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('youtube', 'Youtube', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);
        $this->form_validation->set_rules('students', 'Students', 'required|trim', [
            'required' => 'isi Harus Diisi',
        ]);


        // validasi form
        if ($this->form_validation->run() == true) {
            // jika validasi benar
            $this->_update();
        } else {
            $this->session->set_flashdata('breadcrumb', 'Profile');
            $this->session->set_flashdata('menu', 'profile');
            $this->session->set_flashdata('menuName', 'Profile');
            $this->session->set_flashdata('icon', 'fas fa-users');
            $data['profile'] = $this->m_site->get_site();
            $this->load->view('admin/profile/index.php', $data);
            unset($_SESSION['message']);
        }
    }
    private function _update()
    {

        $title = $this->input->post('title');
        $slogan = $this->input->post('slogan');
        $address = $this->input->post('address');
        $description = $this->input->post('description');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $facebook = $this->input->post('facebook');
        $tiktok = $this->input->post('tiktok');
        $instagram = $this->input->post('instagram');
        $whatsapps = $this->input->post('whatsapps');
        $students = $this->input->post('students');
        $teachers = $this->input->post('teachers');
        $employee = $this->input->post('employee');
        $extra = $this->input->post('extra');
        $youtube = $this->input->post('youtube');


        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|PNG|JPG'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['logo']['name']) || !empty($_FILES['icon']['name'])) {
            if (!empty($_FILES['logo']['name']) && !empty($_FILES['icon']['name'])) {
                $logo = $this->_upload('logo');
                $icon = $this->_upload('icon');
                // $this->m_site->update_site($title, $slogan, $logo,);
                // echo "Icon dan Logo Diupload<br><br>";
                // echo "Logo nama : " . $logo . "<br>";
                // echo "Icon nama : " . $icon . "<br>";
                // echo "Icon dan Logo Diupload<br><br>";
                // echo var_dump($this->input->post);
                $this->m_site->update_site($title, $slogan, $address, $logo, $icon, $description, $email, $phone, $facebook, $tiktok, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube);
            } else if (!empty($_FILES['logo']['name']) && empty($_FILES['icon']['name'])) {
                $logo = $this->_upload('logo');
                // echo "Logo Diupload<br><br>";
                // echo "Logo nama : " . $logo . "<br>";
                // echo var_dump($this->input->post);
                $this->m_site->update_sitelogo($title, $slogan, $address, $logo, $description, $email, $phone, $facebook, $tiktok, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube);
                // $this->m_site->update_site($title, $slogan, $logo,);
            } else if (empty($_FILES['logo']['name']) && !empty($_FILES['icon']['name'])) {
                $icon = $this->_upload('icon');
                // echo "Icon Diupload<br><br>";
                // echo "Icon nama : " . $icon . "<br>";
                // echo var_dump($title);

                $this->m_site->update_siteicon($title, $slogan, $address, $icon, $description, $email, $phone, $facebook, $tiktok, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube);
                // $this->m_site->update_site($title, $slogan);
            } else {
                echo "Kosong<br><br>";
                echo var_dump($title);
                // $this->m_site->update_site($title, $slogan);
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Info Site Berhasil di Update!</div>');

            redirect('admin/site', 'refresh');
        } else {
            $this->m_site->update_sitekosong($title, $slogan, $address, $description, $email, $phone, $facebook, $tiktok, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube);
            redirect('admin/site', 'refresh');

            // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak tersedia, mohon tambahkan logo thumbnail!</div>');
            // echo "Kosong<br><br>";
            // echo var_dump($title);
            // redirect('admin/site', 'refresh');
        }
    }

    private function _upload($upload)
    {
        if ($this->upload->do_upload($upload)) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            // $config['width'] = 800;
            // $config['height'] = 600;
            $config['new_image'] = './assets/images/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $logo = $gbr['file_name'];
            return $logo;
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error['error'] . '</div>');
            // var_dump($error);

            redirect('admin/site', 'refresh');
        }
    }
}
