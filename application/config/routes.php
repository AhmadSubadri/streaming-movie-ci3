<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
// Kurikulum
$route['data-kurikulum'] = 'Akademik/Data_kurikulum/index';
$route['data-kurikulum/insert'] = 'Akademik/Data_kurikulum/Insert';
$route['data-kurikulum/update'] = 'Akademik/Data_kurikulum/Update';
$route['data-kurikulum/delete'] = 'Akademik/Data_kurikulum/Delete';

// Data Camaba from api's
$route['data-camaba'] = 'Mahasiswa/Data_camaba/Index';
$route['data-camaba/update'] = 'Mahasiswa/Data_camaba/update';
$route['data-camaba/detail'] = 'Mahasiswa/Data_camaba/detail';

// Data Mahasiswa from BAK
$route['data-mahasiswa'] = 'Mahasiswa/Data_mahasiswa/Index';
$route['data-mahasiswa/update'] = 'Mahasiswa/Data_mahasiswa/update';
$route['data-mahasiswa/detail'] = 'Mahasiswa/Data_mahasiswa/detail';

// User Management
$route['data-users'] = 'Users/Users/index';
$route['data-users/insert'] = 'Users/Users/Insert';
$route['data-users/update'] = 'Users/Users/Update';
$route['data-users/delete'] = 'Users/Users/Delete';

$route['data-user-level'] = 'Users/Users_level/index';
$route['data-user-level/delete'] = 'Users/Users_level/Delete';
