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
		$this->load->model('principal_model');

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
		$this->template->load_sub('num_student', $this->user_model->get_total_student());
		$this->template->load_sub('num_teacher', $this->user_model->get_total_teacher());
		$this->template->load_sub('num_subject', $this->user_model->get_total_subject());
		$this->template->load_sub('num_schedule', $this->user_model->get_total_schedule());
		$this->template->load('admin/index');
	}

	function change_pass()
	{
		$this->template->load('admin/change_pass');
	}

	function save_change_pass(){

    	$this->form_validation->set_rules('old_pass', 'Old Password', 'required|min_length[8]');
    	$this->form_validation->set_rules('new_pass', 'New Password', 'required|min_length[8]');
    	$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[new_pass]');

    	if ($this->form_validation->run() == FALSE) {
    		$this->change_pass();
    	}else{
    		$result = $this->user_model->change_pass($this->input->post('old_pass'), $this->input->post('new_pass'));

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Password updated successfully!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('admin/change_pass', 'refresh');
    		}else{
				$this->session->set_flashdata('success', '<div class="alert alert-danger fade in m-b-15"><strong>Failed!</strong> Password updated failed!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('admin/change_pass', 'refresh');
			}
    	}
	}

	function student_delete($id)
	{
		$result = $this->user_model->delete_student($id);
		if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Password updated successfully!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('admin/students', 'refresh');
		}
	}

	function section_delete($id)
	{
		$result = $this->user_model->delete_section($id);
		if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Section deleted successfully!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('admin/sections', 'refresh');
		}
	}

	function subject_delete($id)
	{
		$result = $this->user_model->delete_suject($id);
		if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Subject deleted successfully!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('admin/subjects', 'refresh');
		}
	}

	function teacher_delete($id)
	{
		$result = $this->user_model->delete_teacher($id);
		if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Teacher deleted successfully!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('admin/teachers', 'refresh');
		}
	}

	function logout()
    {
        session_destroy();
        redirect(base_url('login'),'refresh');
    }

	function users(){
		$this->template->load_sub('users', $this->user_model->fetch_users());
		$this->template->load_sub('active_teacher', $this->user_model->fetch_active_teacher());
		$this->template->load_sub('active_principal', $this->user_model->fetch_active_principal());
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

	function principal()
	{
		$this->template->load_sub('principals', $this->principal_model->fetch_principals());
		$this->template->load('admin/principal');
	}

	function edit_principal($id){
		$this->template->load_sub('principal', $this->principal_model->fetch_principal($id));
		$this->template->load('admin/edit_principal');
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

	function add_principal(){
		$this->template->load('admin/add_principal');
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
