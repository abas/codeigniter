<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/view';
$route['/home(:any)'] = 'welcome/view/$1';

#$route['default_controller'] = 'news/index';
#$route['news/(:any)'] = 'news/view/$1';

$route['news'] = 'news';
$route['news/sum'] = 'news/view';

$route['abas/(:any)'] = 'abas/update/$1';
$route['abas'] = 'abas/index';
$route['abas/(:any)'] = 'abas/cek/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
