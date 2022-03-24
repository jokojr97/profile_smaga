<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['sitemap\.xml'] = 'sitemap/index';
$route['feed'] = 'rss/index';
//admin page
$route['admin/page'] = 'admins/page/index';
// admin product
$route['admin/product'] = 'admins/product/index';
$route['admin/product/add'] = 'admins/product/add';
$route['admin/product/insert'] = 'admins/product/insert';
$route['admin/product/edit/(:any)'] = 'admins/product/edit';
$route['admin/product/delete/(:any)'] = 'admins/product/delete';
$route['admin/product/update'] = 'admins/product/update';
//admin Users
$route['admin/postype/updatetipe'] = 'admins/posttype/updatetipe';
$route['admin/users'] = 'admins/users/index';
$route['admin/users/add'] = 'admins/users/add';
$route['admin/users/edit'] = 'admins/users/edit';
$route['admin/users/delete'] = 'admins/users/delete';
// admin posttype
$route['admin/tipe_post'] = 'admins/posttype/index';
$route['admin/postype/edit/(:any)'] = 'admins/posttype/edit';
$route['admin/postype/hapus/(:any)'] = 'admins/posttype/hapus';
$route['admin/postype/insert'] = 'admins/posttype/insert';
$route['admin/postype/updatetipe'] = 'admins/posttype/updatetipe';
$route['admin/postype/get_name'] = 'admins/posttype/getname';
// admin kategori
$route['admin/categories'] = 'admins/category/index';
$route['admin/categories/insert'] = 'admins/category/insert';
$route['admin/categories/edit/(:any)'] = 'admins/category/edit';
$route['admin/categories/hapus/(:any)'] = 'admins/category/hapus';
$route['admin/categories/update'] = 'admins/category/update';
$route['admin/categories/get_name'] = 'admins/category/getname';
// admin tags
$route['admin/tags/update_keyword_post'] = 'admins/tags/update_keyword_post';
$route['admin/tags'] = 'admins/tags/index';
$route['admin/tags/insert'] = 'admins/tags/insert';
$route['admin/tags/edit/(:any)'] = 'admins/tags/edit';
$route['admin/tags/hapus/(:any)'] = 'admins/tags/hapus';
$route['admin/tags/update'] = 'admins/tags/update';
$route['admin/tags/get_name'] = 'admins/tags/getname';
// admin kcfinder
$route['admin/kcfinder'] = 'admins/teskcfinder/index';


// home
$route['berita'] = 'home/berita';
$route['profiles'] = 'home/profiles';
$route['product'] = 'home/product';
$route['product/(:any)'] = 'home/detail_product';
$route['donasi'] = 'home/donasi';
$route['search/(:any)'] = 'home/search';
$route['search'] = 'home/search';
$route['searchproses'] = 'home/searchproses';
$route['berita/notfound'] = 'home/beritanotfound';
$route['post/notfound'] = 'home/beritanotfound';
$route['berita/(:any)'] = 'home/detail';
$route['post/(:any)'] = 'home/detail';
$route['kegiatan/(:any)'] = 'home/detail';
$route['category/(:any)'] = 'home/category';
$route['posttipe/(:any)'] = 'home/posttipe';
$route['tag/(:any)'] = 'home/tag';
$route['tentangkami'] = 'home/tentangkami';
// hubungi kami
$route['contact'] = 'home/contact';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// $route['relawan'] = 'admin/relawan';
// $route['warga'] = 'admin/warga';
// $route['penyedia'] = 'admin/penyedia';
// $route['adminsuper'] = 'adminsuper/overview';
// $route['admin'] = 'admin/overview';
// $route['proyek'] = 'proyek/overview';
