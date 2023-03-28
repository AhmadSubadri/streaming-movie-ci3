<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

// Master Data
// Yayasan
$route['data-yayasan'] = 'Master_data/Yayasan_master';
$route['data-yayasan/insert'] = 'Master_data/Yayasan_master/Insert';
// Perguruan Tinggi
$route['data-perguruan-tinggi'] = 'Master_data/Perguruantinggi_master';
$route['data-perguruan-tinggi/insert'] = 'Master_data/Perguruantinggi_master/Insert';
// Fakultas
$route['data-fakultas'] = 'Master_data/Fakultas_master';
$route['data-fakultas/insert'] = 'Master_data/Fakultas_master/Insert';
$route['data-fakultas/update'] = 'Master_data/Fakultas_master/Update';
$route['data-fakultas/delete'] = 'Master_data/Fakultas_master/Delete';
// Program studi
$route['data-program-studi'] = 'Master_data/Prodi_master';
$route['data-program-studi/insert'] = 'Master_data/Prodi_master/Insert';
$route['data-program-studi/update'] = 'Master_data/Prodi_master/Update';
$route['data-program-studi/delete'] = 'Master_data/Prodi_master/Delete';

// Data dosen
$route['data-dosen'] = 'Master_data/Dosen_master';
$route['data-dosen/insert'] = 'Master_data/Dosen_master/Insert';
$route['data-dosen/update'] = 'Master_data/Dosen_master/Update';
$route['data-dosen/delete'] = 'Master_data/Dosen_master/Delete';

// Data tahun akademik
$route['tahun-akademik'] = 'Akademik/Tahun_akademik';
$route['tahun-akademik/insert'] = 'Akademik/Tahun_akademik/Insert';
$route['tahun-akademik/update'] = 'Akademik/Tahun_akademik/Update';
$route['tahun-akademik/delete/(:any)'] = 'Akademik/Tahun_akademik/Delete/$1';

// Data Matakuliah
$route['data-matakuliah'] = 'Akademik/Data_matakuliah';
$route['data-matakuliah/insert'] = 'Akademik/Data_matakuliah/insert';
$route['data-matakuliah/update'] = 'Akademik/Data_matakuliah/update';
$route['data-matakuliah/delete'] = 'Akademik/Data_matakuliah/delete';

// Data Camaba from api's
$route['data-camaba'] = 'Mahasiswa/Data_camaba/Index';
$route['data-camaba/update'] = 'Mahasiswa/Data_camaba/update';
$route['data-camaba/detail'] = 'Mahasiswa/Data_camaba/detail';

// Data Mahasiswa from BAK
$route['data-mahasiswa'] = 'Mahasiswa/Data_mahasiswa/Index';
$route['data-mahasiswa/update'] = 'Mahasiswa/Data_mahasiswa/update';
$route['data-mahasiswa/detail'] = 'Mahasiswa/Data_mahasiswa/detail';