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

// admin change password
$route['admin/change_password'] = 'admins/users/change_password';
$route['admin/change_password/update'] = 'admins/change_password/update';

// admin site setting
$route['admin/site'] = 'admins/site/index';
$route['admin/site/update'] = 'admins/site/update';
//admin page
$route['admin/page'] = 'admins/page/index';
//admin Users
$route['admin/users'] = 'admins/users/index';
$route['admin/users/add'] = 'admins/users/add';
$route['admin/users/edit'] = 'admins/users/edit';
$route['admin/users/delete'] = 'admins/users/delete';
//admin Profile
// $route['admin/profile'] = 'admins/profile/index';
// $route['admin/profile/edit'] = 'admins/profile/edit';
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
// admin galeri
$route['admin/galeri/foto/add'] = 'admins/galeri/addfoto';
$route['admin/galeri/foto'] = 'admins/galeri/foto';
$route['admin/galeri/foto/edit/(:any)'] = 'admins/galeri/editfoto';
$route['admin/galeri/foto/hapus/(:any)'] = 'admins/galeri/hapus';
// admin fasilitas
$route['admin/facilities/add'] = 'admins/facilities/add';
$route['admin/facilities'] = 'admins/facilities';
$route['admin/facilities/edit/(:any)'] = 'admins/facilities/edit';
$route['admin/facilities/delete/(:any)'] = 'admins/facilities/delete';
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
$route['ppdb'] = 'home/ppdb';
$route['profiles'] = 'home/profiles';
$route['galeri/foto'] = 'home/galerifoto';
$route['search/(:any)'] = 'home/search';
$route['search'] = 'home/search';
$route['searchproses'] = 'home/searchproses';
$route['berita/notfound'] = 'home/beritanotfound';
$route['post/notfound'] = 'home/beritanotfound';
$route['berita/(:any)'] = 'home/detail';
$route['post/(:any)'] = 'home/detail';
$route['category/(:any)'] = 'home/category';
$route['posttipe/(:any)'] = 'home/posttipe';
$route['tag/(:any)'] = 'home/tag';
// hubungi kami
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
