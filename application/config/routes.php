<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'template/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['categories'] = 'categories/categories/index';
$route['login'] = 'auth/login/index';
