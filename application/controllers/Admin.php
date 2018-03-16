<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('student_model');
        $this->load->model('section_model');
        $this->load->model('subject_model');
        $this->load->model('teacher_model');

        $styles = array(
        	'assets/plugins/fullcalendar/fullcalendar.print.css',
        	'assets/plugins/fullcalendar/fullcalendar.min.css'
		);
		$js = array(
			'assets/plugins/fullcalendar/fullcalendar.min.js',
			'assets/plugins/fullcalendar/lib/moment.min.js'
		);
		
		$this->template->set_additional_css($styles);
		$this->template->set_additional_js($js);
        
        //$this->_checkLogin();
        $this->template->set_title('Admin');
        $this->template->set_template('backend');
    }

    function index(){
		$this->template->load('admin/index');
	}

	function users(){
		$this->template->load_sub('users', $this->user_model->fetch_users());
		$this->template->load('admin/users');
	}

	function edit_user($id){
		$this->template->load_sub('user', $this->user_model->fetch_user($id));
		$this->template->load('admin/edit_user');
	}

	function students(){
		$this->template->load_sub('students', $this->student_model->fetch_students());
		$this->template->load('admin/students');
	}

	function edit_student($id){
		$this->template->load_sub('student', $this->student_model->fetch_student($id));
		$this->template->load('admin/edit_student');
	}

	function sections(){
		$this->template->load_sub('sections', $this->section_model->fetch_sections());
		$this->template->load('admin/sections');
	}

	function edit_section($id){
		$this->template->load_sub('section', $this->section_model->fetch_section($id));
		$this->template->load('admin/edit_section');
	}

	function subjects(){
		$this->template->load_sub('subjects', $this->subject_model->fetch_subjects());
		$this->template->load('admin/subjects');
	}

	function edit_subject($id){
		$this->template->load_sub('subject', $this->subject_model->fetch_subject($id));
		$this->template->load('admin/edit_subject');
	}

	function teachers(){
		$this->template->load_sub('teachers', $this->teacher_model->fetch_teachers());
		$this->template->load('admin/teachers');
	}

	function edit_teacher($id){
		$this->template->load_sub('teacher', $this->teacher_model->fetch_teacher($id));
		$this->template->load('admin/edit_teacher');
	}

	function add_user(){
		$this->template->load('admin/add_user');
	}

	function add_student(){
		$this->template->load('admin/add_student');
	}

	function add_section(){
		$this->template->load('admin/add_section');
	}

	function add_subject(){
		$this->template->load('admin/add_subject');
	}

	function add_teacher(){
		$this->template->load('admin/add_teacher');
	}

	function add_sample(){
		
	}

	function login(){
		$js = array(
			'assets/js/login.js'
		);
		
		$this->template->set_additional_js($js);

		$this->template->set_title('LOGIN');
        $this->template->set_template('login');
        $this->template->load('login/index');
	}
}
