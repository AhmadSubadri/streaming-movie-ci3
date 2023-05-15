<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Administrator Route's
$route['administrator'] = 'dashboard';

// Fakultas Route's
$route['fakultas'] = 'Back_fakultas/dashboard/dashboard';
$route['fakultas/data-prodi'] = 'Back_fakultas/data_prodi/data_prodi';
$route['fakultas/data-dosen'] = 'Back_fakultas/data_dosen/data_dosen';

// Prodi Route's
$route['prodi'] = 'Back_prodi/dashboard/dashboard';
$route['prodi/update-detail'] = 'Back_prodi/dashboard/dashboard/Save_Profile';
$route['prodi/data-mahasiswa'] = 'Back_prodi/data_mahasiswa/data_mahasiswa';
$route['prodi/data-dosen'] = 'Back_prodi/data_dosen/data_dosen';

$route['404'] = 'Auth/block';

// Master Data
// Yayasan
$route['administrator/data-yayasan'] = 'Master_data/Yayasan_master';
$route['administrator/data-yayasan/insert'] = 'Master_data/Yayasan_master/Insert';
// Perguruan Tinggi
$route['administrator/data-perguruan-tinggi'] = 'Master_data/Perguruantinggi_master';
$route['administrator/data-perguruan-tinggi/insert'] = 'Master_data/Perguruantinggi_master/Insert';
// Fakultas
$route['administrator/data-fakultas'] = 'Master_data/Fakultas_master';
$route['administrator/data-fakultas/insert'] = 'Master_data/Fakultas_master/Insert';
$route['administrator/data-fakultas/update'] = 'Master_data/Fakultas_master/Update';
$route['administrator/data-fakultas/delete'] = 'Master_data/Fakultas_master/Delete';
// Program studi
$route['administrator/data-program-studi'] = 'Master_data/Prodi_master';
$route['administrator/data-program-studi/insert'] = 'Master_data/Prodi_master/Insert';
$route['administrator/data-program-studi/update'] = 'Master_data/Prodi_master/Update';
$route['administrator/data-program-studi/delete'] = 'Master_data/Prodi_master/Delete';

// Data dosen
$route['administrator/data-dosen'] = 'Master_data/Dosen_master';
$route['administrator/data-dosen/insert'] = 'Master_data/Dosen_master/Insert';
$route['administrator/data-dosen/update'] = 'Master_data/Dosen_master/Update';
$route['administrator/data-dosen/delete'] = 'Master_data/Dosen_master/Delete';

// Data tahun akademik
$route['administrator/tahun-akademik'] = 'Akademik/Tahun_akademik';
$route['administrator/tahun-akademik/insert'] = 'Akademik/Tahun_akademik/Insert';
$route['administrator/tahun-akademik/update'] = 'Akademik/Tahun_akademik/Update';
$route['administrator/tahun-akademik/delete/(:any)'] = 'Akademik/Tahun_akademik/Delete/$1';

// Data Matakuliah
$route['administrator/data-matakuliah'] = 'Akademik/Data_matakuliah';
$route['administrator/data-matakuliah/insert'] = 'Akademik/Data_matakuliah/insert';
$route['administrator/data-matakuliah/update'] = 'Akademik/Data_matakuliah/update';
$route['administrator/data-matakuliah/delete'] = 'Akademik/Data_matakuliah/delete';
$route['administrator/data-matakuliah/autocomplete'] = 'Akademik/Data_matakuliah/get_autocomplete_dosen';
// Kurikulum
$route['administrator/data-kurikulum'] = 'Akademik/Data_kurikulum/index';
$route['administrator/data-kurikulum/insert'] = 'Akademik/Data_kurikulum/Insert';
$route['administrator/data-kurikulum/update'] = 'Akademik/Data_kurikulum/Update';
$route['administrator/data-kurikulum/delete'] = 'Akademik/Data_kurikulum/Delete';

// Kurikulum prodi
$route['administrator/kurikulum-prodi'] = 'Akademik/Kurikulum_prodi';
$route['administrator/kurikulum-prodi/get-mk-byprodi'] = 'Akademik/Kurikulum_prodi/Get_MK_ByProdi_Kode';
$route['administrator/kurikulum-prodi/autocomplete'] = 'Akademik/Kurikulum_prodi/get_autocomplete_mk';
$route['administrator/kurikulum-prodi/insert'] = 'Akademik/Kurikulum_prodi/insert';

// Data Camaba from api's
$route['data-camaba'] = 'Mahasiswa/Data_camaba/Index';
$route['data-camaba/update'] = 'Mahasiswa/Data_camaba/update';
$route['data-camaba/detail'] = 'Mahasiswa/Data_camaba/detail';

// Data Mahasiswa from BAK
$route['administrator/data-mahasiswa'] = 'Mahasiswa/Data_mahasiswa/Index';
$route['administrator/data-mahasiswa/update'] = 'Mahasiswa/Data_mahasiswa/update';
$route['administrator/data-mahasiswa/detail'] = 'Mahasiswa/Data_mahasiswa/detail';

// User Management
$route['administrator/data-users'] = 'Users/Users/index';
$route['administrator/data-users/insert'] = 'Users/Users/Insert';
$route['administrator/data-users/update'] = 'Users/Users/Update';
$route['administrator/data-users/delete'] = 'Users/Users/Delete';

$route['administrator/data-user-level'] = 'Users/Users_level/index';
$route['administrator/data-user-level/delete'] = 'Users/Users_level/Delete';

$route['not-found'] = 'Dashboard/notfound';
