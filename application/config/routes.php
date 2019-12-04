<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/create'] = 'posts/create';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
// change default controller to pages/view
$route['default_controller'] = 'pages/view';
// $1 represents anything
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
