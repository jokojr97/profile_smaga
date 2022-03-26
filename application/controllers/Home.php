<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('m_home');
		$this->load->model('m_product');
		$this->load->model('m_post');
		$this->load->model('m_prestasi');
		$this->load->model('m_category');
		$this->load->model('m_keyword');
		$this->load->model('m_program');
	}

	public function jajal()
	{
		$jajal = $this->m_post->coba_join();
		$jajal = json_encode($jajal->result()[1]);
		echo $jajal;
	}

	public function index()
	{
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['title'] = "Website Resmi";
		$data["menu"] = "home";
		$data["url"] = base_url();
		$data['news'] = $this->m_post->get_beritas();
		// $data['programs'] = $this->m_galeri->get_foto();
		// $data['products'] = $this->m_facilities->get_facilities();
		// $this->load->view('page/_partial/header', $data);
		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/overview', $data);
		$this->load->view('page/_partial/footer');
	}

	public function product()
	{
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['title'] = "List Produk";
		$data["breadcumb"] = "Product";
		$data["menu"] = "product";
		$data["url"] = base_url();
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		// $data['news'] = $this->m_post->get_beritas();
		// $data['programs'] = $this->m_program->get_programs();
		$data['products'] = $this->m_product->get_product();
		// $this->load->view('page/_partial/header', $data);
		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/product', $data);
		$this->load->view('page/_partial/footer');
	}

	public function profiles()
	{
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['title'] = "Profiles";
		$data["breadcumb"] = "Profile";
		$data["menu"] = "profile";
		$data["url"] = base_url();
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$data['prestasi'] = $this->m_prestasi->get_prestasi();
		$data['ekstra'] = $this->m_prestasi->get_ekstra();
		$data['fasilitas'] = $this->m_prestasi->get_fasilitas();
		// $data['programs'] = $this->m_program->get_programs();
		$data['products'] = $this->m_product->get_product();
		// $this->load->view('page/_partial/header', $data);
		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/profiles', $data);
		$this->load->view('page/_partial/footer');
	}

	public function galerifoto()
	{
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['title'] = "Galeri";
		$data["breadcumb"] = "Galeri/Foto";
		$data["menu"] = "galeri";
		$data["url"] = base_url();
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		// $data['news'] = $this->m_post->get_beritas();
		// $data['programs'] = $this->m_program->get_programs();
		// $data['products'] = $this->m_product->get_product();
		// $this->load->view('page/_partial/header', $data);
		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/galerifoto', $data);
		$this->load->view('page/_partial/footer');
	}


	public function contact()
	{
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['title'] = "Contact Us";
		$data["breadcumb"] = "Contact Us";
		$data["menu"] = "contact";
		$data["url"] = base_url();
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		// $data['news'] = $this->m_post->get_beritas();
		// $data['programs'] = $this->m_program->get_programs();
		$data['products'] = $this->m_product->get_product();
		// $this->load->view('page/_partial/header', $data);
		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/contact', $data);
		$this->load->view('page/_partial/footer');
	}


	public function detail_product()
	{
		// $data['deskripsi'] = 1;	
		$id = $this->uri->segment(3);
		if (!$id) {
			$id = $this->uri->segment(2);
		}

		$data['id'] = $id;
		$product = $this->m_product->get_product_byid($id);
		$data['product'] = $product;
		$data['breadcumb'] = 'Product';
		$data['menu'] = 'product';
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data["url"] = base_url();
		$data['title'] = $product['name'];
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();

		if ($product) {
			$this->load->view('page/_partial/header', $data);
			$this->load->view('page/detail_product', $data);
			$this->load->view('page/_partial/footer');
		} else {
			redirect('berita/notfound', 'refresh');
		}
	}

	public function detail()
	{
		$data['deskripsi'] = 1;
		$id_berita = $this->uri->segment(3);
		if (!$id_berita) {
			$id_berita = $this->uri->segment(2);
		}
		$data['id_berita'] = $id_berita;
		$data['berita'] = $this->m_post->get_berita_id($id_berita);
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['title'] = "SMAN 3 Bojonegoro";
		$data["breadcumb"] = "Post";
		$post = $data['berita'];
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$data['posttype_list'] = $this->m_post->get_type_post();
		$data["url"] = base_url() . "berita/" . $id_berita;

		// var_dump($id_berita);
		if ($data['berita']) {
			$posttype = $this->m_post->get_beritas_by_id($post['id_post']);
			$data["menu"] = $posttype['posttype_slug'];
			$this->load->view('page/_partial/header', $data);
			$this->load->view('page/detail', $data);
			$this->load->view('page/_partial/footer');
		} else {
			redirect('berita/notfound', 'refresh');
		}
		// echo $id_berita;
	}
	public function beritanotfound()
	{
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data["menu"] = "berita";
		$data["url"] = base_url() . "berita/notfound";
		$data['title'] = "Not Found - ";
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/detail_notfound', $data);
		$this->load->view('page/_partial/footer');
	}

	public function berita()
	{
		$data['title'] = "Berita";
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data["url"] = base_url() . "berita";
		$data['category_list'] = $this->m_category->get_category();
		$data["breadcumb"] = "Berita";
		$data["menu"] = "berita";
		$data['berita_list'] = $this->m_post->get_posts_all();

		$trow = $this->db->count_all('smaga_post');

		//konfigurasi pagination
		$config['base_url'] = site_url('home/berita'); //site url
		$config['total_rows'] =  $trow; //total row
		$config['per_page'] = 4;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['data'] = $this->m_post->get_post_list($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();
		// var_dump($data);

		$this->load->view('page/_partial/header', $data);
		$this->load->view('page/post', $data);
		$this->load->view('page/_partial/footer');
	}
	public function proses_cari()
	{
		$tahun = $this->input->post('tahun');
		$bidang = $this->input->post('bidang');
		$kategori = $this->input->post('kategori');
		if ($bidang == 2) {
			header("location:" . base_url() . "home/datajatim/2018/" . $bidang . "/" . $kategori . "");
		} else {
			header("location:" . base_url() . "home/datajatim/" . $tahun . "/" . $bidang . "/" . $kategori . "");
		}
	}
	public function ambil_data()
	{
		// $id = $this->input->get('id');
		$rst = $this->db->get('ambil_data');
		$result = array();

		foreach ($rst->result_array() as $value) {
			$result[] = $value;
		}

		echo json_encode($result);
	}
	public function searchproses()
	{
		$keyword = $this->input->post('keyword');
		$keyword = $this->make_slug($keyword);
		// $keyword = str_replace('-', ' ', $keyword);
		redirect('search/' . $keyword . '', 'refresh');
	}

	public function search()
	{
		$uri = $this->uri->segment(3);
		$segement = 4;
		if (!$uri) {
			$uri = $this->uri->segment(2);
			$segement = 4;
		}

		// $keyword = str_replace('-', ' ', $keyword);
		$search_unslug = str_replace('-', ' ', $uri);
		$search = $this->m_post->search($search_unslug);

		$data['title'] = "Pencarian: " . $search_unslug;
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data["url"] = base_url() . "search/" . $uri;
		$data["menu"] = "berita";
		$data["breadcumb"] = "Search";
		$data["text"] = $search_unslug;

		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$data['posttype_list'] = $this->m_post->get_type_post();

		if ($search) {
			$search = $this->m_post->search($search_unslug);

			$trow = count($search->result());

			//konfigurasi pagination
			$urls = 'home/search/' . $uri;

			$config['base_url'] = site_url($urls); //site url
			$config['total_rows'] =  $trow; //total row
			$config['per_page'] = 6;  //show record per halaman
			$config["uri_segment"] = $segement;  // uri parameter
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);

			// Membuat Style pagination untuk BootStrap v4
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';


			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment($segement)) ? $this->uri->segment($segement) : 0;

			$data['data'] = $this->m_post->get_post_list_search($search_unslug, $config["per_page"], $data['page']);

			$data['pagination'] = $this->pagination->create_links();
			// var_dump($data['data']);
			$this->load->view('page/_partial/header', $data);
			$this->load->view('page/post', $data);
			$this->load->view('page/_partial/footer');
		} else {
			redirect('berita/notfound', 'refresh');
		}
	}

	public function category()
	{
		$uri = $this->uri->segment(3);
		$segement = 4;
		if (!$uri) {
			$uri = $this->uri->segment(2);
			$segement = 4;
		}
		$get_kategori_id = $this->m_category->get_category_by_id($uri);

		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data["url"] = base_url() . "category/" . $uri;
		$data["menu"] = "berita";
		$data["breadcumb"] = "Category";
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$data['posttype_list'] = $this->m_post->get_type_post();

		if ($get_kategori_id) {
			$slug = $get_kategori_id['slug'];
			$url = 'category/' . $slug;
			redirect($url, 'refresh');
		} else {
			$get_kategori_slug = $this->m_category->get_kategori_by_slug($uri);
			if ($get_kategori_slug) {
				$id = $get_kategori_slug['id'];
				$kategori = $this->m_post->get_kategori($id);
				// $data['data'] = $kategori;
				$data['text'] = $get_kategori_slug['name'];

				$data['title'] = $get_kategori_slug['name'];


				// $search = $this->m_post->search($search_unslug);

				$trow = count($kategori->result());

				//konfigurasi pagination
				$urls = 'home/category/' . $uri;

				$config['base_url'] = site_url($urls); //site url
				$config['total_rows'] =  $trow; //total row
				$config['per_page'] = 6;  //show record per halaman
				$config["uri_segment"] = $segement;  // uri parameter
				$choice = $config["total_rows"] / $config["per_page"];
				$config["num_links"] = floor($choice);

				// Membuat Style pagination untuk BootStrap v4
				$config['first_link']       = 'First';
				$config['last_link']        = 'Last';
				$config['next_link']        = 'Next';
				$config['prev_link']        = 'Prev';
				$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
				$config['full_tag_close']   = '</ul></nav></div>';
				$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
				$config['num_tag_close']    = '</span></li>';
				$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
				$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
				$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
				$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['prev_tagl_close']  = '</span>Next</li>';
				$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
				$config['first_tagl_close'] = '</span></li>';
				$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['last_tagl_close']  = '</span></li>';


				$this->pagination->initialize($config);
				$data['page'] = ($this->uri->segment($segement)) ? $this->uri->segment($segement) : 0;

				$data['data'] = $this->m_post->get_post_list_category($id, $config["per_page"], $data['page']);

				$data['pagination'] = $this->pagination->create_links();
				// var_dump($data['data']);


				$this->load->view('page/_partial/header', $data);
				$this->load->view('page/post', $data);
				$this->load->view('page/_partial/footer');
				// var_dump($kategori->result());
			} else {
				redirect('berita/notfound', 'refresh');
			}
		}
	}

	public function posttipe()
	{
		$uri = $this->uri->segment(3);
		$segement = 4;
		if (!$uri) {
			$uri = $this->uri->segment(2);
			$segement = 4;
		}
		$get_posttipe_slug = $this->m_post->get_posttipe_by_slug($uri);
		$data["url"] = base_url() . "posttipe/" . $uri;
		$data['title'] = $get_posttipe_slug['posttype_name'];
		$data['breadcumb'] = "Posttipe";
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$data['posttype_list'] = $this->m_post->get_type_post();

		if ($get_posttipe_slug) {
			$id = $get_posttipe_slug['id'];
			$posttipe = $this->m_post->get_posttipe($id);
			$data["menu"] = $get_posttipe_slug['posttype_slug'];

			$trow = count($posttipe->result());

			//konfigurasi pagination
			$urls = 'home/posttipe/' . $get_posttipe_slug['posttype_slug'];
			$config['base_url'] = site_url($urls); //site url
			$config['total_rows'] =  $trow; //total row
			$config['per_page'] = 9;  //show record per halaman
			$config["uri_segment"] = $segement;  // uri parameter
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);

			// Membuat Style pagination untuk BootStrap v4
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment($segement)) ? $this->uri->segment($segement) : 0;

			$data['data'] = $this->m_post->get_postipe_post_list($id, $config["per_page"], $data['page']);

			$data['pagination'] = $this->pagination->create_links();

			$data['posttipe'] = $posttipe;
			$data['text'] = $get_posttipe_slug['posttype_name'];
			$data['icon_posttipe'] = $get_posttipe_slug['posttype_icon'];

			$this->load->view('page/_partial/header', $data);
			$this->load->view('page/post', $data);
			$this->load->view('page/_partial/footer');
			// echo $data['page'];
		} else {
			redirect('berita/notfound', 'refresh');
		}
	}


	public function tag()
	{
		$uri = $this->uri->segment(3);
		$segement = 4;
		if (!$uri) {
			$uri = $this->uri->segment(2);
			$segement = 4;
		}
		$get_tag_slug = $this->m_keyword->get_keyword_by_slug($uri);

		$data["url"] = base_url() . "tag/" . $uri;
		$data['breadcumb'] = "Tag";
		$data['title'] = $get_tag_slug['name'];
		$data['deskripsi'] = "SMAN 3 Bojonegoro Adalah Salah Satu Sekolah Menengah Atas (SMA) Negeri unggulan dengan Akreditasi A dengan fasilitas lengkap mulai dari lab komputer, lapangan basket, futsal, tenis, dll.";
		$data['keyword'] = "SMAN 3 Bojonegoro, smaga, sma 3, bojonegoro, akreditasi A";
		$data["menu"] = "berita";
		$data['berita_list'] = $this->m_post->get_posts_all();
		$data['category_list'] = $this->m_category->get_category();
		$data['posttype_list'] = $this->m_post->get_type_post();

		if ($get_tag_slug) {
			$id = $get_tag_slug['id_keyword'];
			$name = $get_tag_slug['name'];
			$tag = $this->m_keyword->get_post_from_name($name);

			$trow = count($tag->result());

			//konfigurasi pagination
			$urls = 'home/tag/' . $get_tag_slug['slug'];
			$config['base_url'] = site_url($urls); //site url
			$config['total_rows'] =  $trow; //total row
			$config['per_page'] = 6;  //show record per halaman
			$config["uri_segment"] = $segement;  // uri parameter
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);

			// Membuat Style pagination untuk BootStrap v4
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment($segement)) ? $this->uri->segment($segement) : 0;

			$data['data'] = $this->m_keyword->get_tag_list($name, $config["per_page"], $data['page']);

			$data['pagination'] = $this->pagination->create_links();

			$data['tag'] = $tag;
			$data['text'] = $get_tag_slug['name'];

			$this->load->view('page/_partial/header', $data);
			$this->load->view('page/post', $data);
			$this->load->view('page/_partial/footer');
			// echo $data['data'];
		} else {
			redirect('berita/notfound', 'refresh');
		}
	}

	private function make_slug($string)
	{
		$slug = strtolower($string);
		$slug = str_replace(" ", "-", $slug);
		$slug = str_replace(";", "", $slug);
		$slug = str_replace(",", "", $slug);
		$slug = str_replace("?", "", $slug);
		$slug = str_replace("!", "", $slug);
		$slug = str_replace("(", "", $slug);
		$slug = str_replace(")", "", $slug);
		$slug = str_replace("]", "", $slug);
		$slug = str_replace("[", "", $slug);
		$slug = str_replace(".", "", $slug);
		$slug = str_replace("'", "", $slug);
		$slug = str_replace('"', "", $slug);
		$slug = str_replace('&', "", $slug);
		return $slug;
	}
}
