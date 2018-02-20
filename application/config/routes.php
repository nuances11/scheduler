<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users'] = 'admin/users';
$route['students'] = 'admin/students';
$route['sections'] = 'admin/sections';
$route['subjects'] = 'admin/subjects';
$route['teachers'] = 'admin/teachers';

$route['user/add'] = 'admin/add_user';
$route['user/save'] = 'user/save_user';
$route['user/edit/(:num)'] = 'admin/edit_user/$1';
$route['user/update'] = 'user/update_user';
$route['user/activate/(:num)'] = 'user/activate_user/$1';
$route['user/deactivate/(:num)'] = 'user/deactivate_user/$1';

$route['student/add'] = 'admin/add_student';
$route['student/save'] = 'student/save_student';
$route['student/checkno'] = 'student/check_studno';
$route['student/edit/(:num)'] = 'admin/edit_student/$1';
$route['student/update'] = 'student/update_student';

$route['section/add'] = 'admin/add_section';
$route['section/save'] = 'section/save_section';
$route['section/edit/(:num)'] = 'admin/edit_section/$1';
$route['section/update'] = 'section/update_section';

$route['subject/add'] = 'admin/add_subject';
$route['subject/save'] = 'subject/save_subject';
$route['subject/edit/(:num)'] = 'admin/edit_subject/$1';
$route['subject/update'] = 'subject/update_subject';

$route['teacher/add'] = 'admin/add_teacher';
$route['teacher/save'] = 'teacher/save_teacher';
$route['teacher/edit/(:num)'] = 'admin/edit_teacher/$1';
$route['teacher/update'] = 'teacher/update_teacher';

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
