<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['grade/(:num)'] = 'home/schedule_grade_view/$1';
$route['user/grade/(:num)'] = 'userbackend/schedule_grade_view/$1'; 

$route['admin/change-pass'] = 'admin/change_pass';
$route['user/change-pass'] = 'userbackend/change_pass';
$route['principal/change-pass'] = 'principal/change_pass';
$route['user/edit-profile'] = 'userbackend/edit_profile';
$route['principal/edit-profile'] = 'principal/edit_profile';
$route['user/update-profile'] = 'userbackend/update_profile';
$route['principal/update-profile'] = 'principal/update_profile';

$route['admin/save_change_pass'] = 'admin/save_change_pass';
$route['user/save_change_pass'] = 'userbackend/save_change_pass';
$route['principal/save_change_pass'] = 'principal/save_change_pass';
$route['delete/student/(:num)'] = 'admin/student_delete/$1';
$route['delete/section/(:num)'] = 'admin/section_delete/$1';
$route['delete/subject/(:num)'] = 'admin/subject_delete/$1';
$route['delete/teacher/(:num)'] = 'admin/teacher_delete/$1';
$route['admin/clear_schedule'] = 'admin/clear_schedule';
$route['admin/delete_schedule'] = 'admin/delete_schedule';

$route['login'] = 'admin/login';
$route['logout'] = 'home/logout';
$route['validate_login'] = 'home/validate_login';

$route['user'] = 'userbackend';
$route['schedule/add'] = 'userbackend/schedule_add';
$route['schedule/save'] = 'userbackend/schedule_save';
$route['schedule/delete/(:num)'] = 'userbackend/schedule_delete/$1';
$route['get_section'] = 'userbackend/get_section';
$route['get_schedule'] = 'userbackend/get_available_schedule';
$route['get_my_schedule'] = 'userbackend/get_my_schedule';
$route['get_available_hour'] = 'userbackend/get_available_hour';
$route['get_available_day'] = 'userbackend/get_available_day';
$route['get_subject'] = 'userbackend/get_subject';
$route['day_select'] = 'userbackend/day_select';
$route['time_select'] = 'userbackend/time_select';
$route['teacher_select'] = 'userbackend/teacher_select';
$route['schedule/submit'] = 'userbackend/schedule_submit';

$route['home'] = 'home/index';
$route['sections-academic/(:num)'] = 'home/sections_academic/$1';
$route['schedule/grade/(:num)/section/(:num)'] = 'home/schedule/$1/$2';

$route['users'] = 'admin/users';
$route['students'] = 'admin/students';
$route['sections'] = 'admin/sections';
$route['subjects'] = 'admin/subjects';
$route['teachers'] = 'admin/teachers';
$route['principals'] = 'admin/principal';

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

$route['principal/add'] = 'admin/add_principal';
$route['principal/save'] = 'principal/save_principal';
$route['principal/edit/(:num)'] = 'admin/edit_principal/$1';
$route['principal/update'] = 'principal/update_principal';
$route['principal/activate/(:num)'] = 'principal/activate_principal/$1';
$route['principal/deactivate/(:num)'] = 'principal/deactivate_principal/$1';
$route['principal/schedule/grade/(:num)/section/(:num)'] = 'principal/schedule/$1/$2';

$route['principal/schedule/grade/(:num)'] = 'principal/schedule_grade_view/$1';

$route['principal'] = 'principal';
$route['view/grade/(:num)/section/(:num)'] = 'principal/view_grade_section/$1/$2';
$route['view/grade/(:num)'] = 'principal/view_grade_sched/$1';
$route['approve/sched'] = 'principal/approve_schedule';
$route['view/schedule/grade/(:num)/section/(:num)/user/(:num)'] = 'principal/view_submitted_schedule/$1/$2/$3';
$route['view/schedule/grade/(:num)'] = 'principal/view_submitted_grade_schedule/$1';
$route['settings'] = 'principal/settings';
$route['update/sched'] = 'principal/update_sched';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
