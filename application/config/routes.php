<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'template/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['categories'] = 'categories/categories/index';
$route['login'] = 'auth/login/index';
$route['logout'] = 'auth/login/logout';

$route['dashboard'] = 'backend/DashboardController/dashboard/index';

$route['data-user'] = 'backend/AdminController/AdminController/index';
$route['data-user/insert'] = 'backend/AdminController/AdminController/store';
$route['data-user/update/(:any)'] = 'backend/AdminController/AdminController/update/$1';
$route['data-user/delete/(:any)'] = 'backend/AdminController/AdminController/delete/$1';
