<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/view';
$route['(:any)'] = 'welcome/view/$1';

#$route['default_controller'] = 'news/index';
#$route['news'] = 'news';
#$route['news/(:any)'] = 'news/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
