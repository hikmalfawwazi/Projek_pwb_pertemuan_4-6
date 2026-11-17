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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'administrator/Admin_dashboard_controller/index';
$route['admin/login'] = 'administrator/Admin_auth_controller/index';
$route['admin/logout'] = 'administrator/Admin_auth_controller/logout';

#kategori
$route['administrator/kategori'] = 'administrator/kategori_controller/index';
$route['administrator/kategori/tambah_kategori'] = 'administrator/kategori_controller/tambah_kategori';
$route['administrator/kategori/hapus/(:num)'] = 'administrator/kategori_controller/hapus_kategori/$1';
$route['administrator/kategori/ubah_kategori/(:num)'] = 'administrator/kategori_controller/ubah_kategori/$1';

#produk
$route['administrator/produk'] = 'administrator/Produk_controller/index';
$route['administrator/produk/tambah_produk'] = 'administrator/Produk_controller/tambah_produk';
$route['administrator/produk/ubah_produk/(:num)'] = 'administrator/Produk_controller/ubah_produk/$1';
$route['administrator/produk/hapus/(:num)'] = 'administrator/Produk_controller/hapus_produk/$1';
$route['administrator/produk/hapus_gambar_produk/(:num)/(:num)'] = 'administrator/Produk_controller/hapus_gambar_produk/$1/$2';

#ongkir
$route['administrator/Ongkir2422500019'] = 'administrator/Ongkir2422500019_controller/index';
$route['administrator/Ongkir2422500019/tambah_ongkir'] = 'administrator/Ongkir2422500019_controller/tambah_ongkir';
$route['administrator/Ongkir2422500019/hapus/(:num)'] = 'administrator/Ongkir2422500019_controller/hapus_ongkir/$1';
$route['administrator/Ongkir2422500019/ubah_ongkir/(:num)'] = 'administrator/Ongkir2422500019_controller/ubah_ongkir/$1';

#pelanggan
$route['login'] = 'pelanggan_controller/login';
$route['register'] = 'pelanggan_controller/register';
$route['logout'] = 'pelanggan_controller/logout';
$route['profil'] = 'pelanggan_controller/profil';

#ecom
$route['produk'] = 'produk_controller/detail';
$route['produk/(:num)'] = 'produk_controller/detail/$1';