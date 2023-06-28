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

$route['data-video'] = 'backend/VideoController/VideoController/index';
$route['data-video/insert'] = 'backend/VideoController/VideoController/store';
$route['data-video/update/(:any)'] = 'backend/VideoController/VideoController/update/$1';
$route['data-video/delete/(:any)'] = 'backend/VideoController/VideoController/delete/$1';

$route['data-category'] = 'backend/CategoryController/CategoryController/index';
$route['data-category/insert'] = 'backend/CategoryController/CategoryController/store';
$route['data-category/update/(:any)'] = 'backend/CategoryController/CategoryController/update/$1';
$route['data-category/delete/(:any)'] = 'backend/CategoryController/CategoryController/delete/$1';
