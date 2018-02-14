<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users'] = 'admin/users';
$route['students'] = 'admin/students';
$route['sections'] = 'admin/sections';
$route['subjects'] = 'admin/subjects';
$route['teachers'] = 'admin/teachers';

$route['user/add'] = 'admin/add_user';
$route['student/add'] = 'admin/add_student';
$route['section/add'] = 'admin/add_section';
$route['subject/add'] = 'admin/add_subject';
$route['teacher/add'] = 'admin/add_teacher';

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
