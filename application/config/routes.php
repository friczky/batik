<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['admin'] 			=  'admin/dashboard' ;
$route['shop'] 				=  'home/shop' ;
$route['about']				=  'home/about' ;
$route['contact']			=  'home/contact' ;
$route['detail/(:any)'] 	=  'home/detail/$1' ;
$route['category/(:any)'] 	=  'home/category/$1' ;
$route['logout'] 			= 'login/logout' ;
$route['404_override'] 		= '' ;
$route['translate_uri_dashes'] = FALSE ;
