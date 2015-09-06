<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']  =   'home';
$route['about']               =   'home/how';
$route['products']            =   'home/products';
$route['advocacy']            =   'home/advocacy';
$route['choose']              =   'home/choose';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
