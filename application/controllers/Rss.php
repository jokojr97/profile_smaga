<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rss extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('xml', 'text'));
		$this->load->model('m_rss');
		$this->load->model('m_home');
		$this->load->model('m_post');
		$this->load->model('m_keyword');
		$this->load->model('m_category');
	}

	public function index()
	{
		// echo "halaman rss";
		$data = array(
			'encoding' 			=> 'utf-8',
			'feed_name' 		=> 'SMAN 3 Bojonegoro',
			'feed_url' 			=> base_url() . 'feed/',
			'page_description' 	=> 'SMAN 3 Bojonegoro adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.',
			'page_language' 	=> 'in',
			'creator_email' 	=> 'sman3bojonegoro@gmail.com',
			'posts' 			=> $this->m_rss->get_posts(10)
		);


		header("Content-Type: application/rss+xml");
		$this->load->vars($data);
		$this->load->view('rss');
	}
}
