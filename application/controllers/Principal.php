<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('principal_model');
		$this->load->model('section_model');
		$this->load->model('schedule_model');
		$this->load->model('user_model');

        $styles = array(

		);
		$js = array(
			'assets/js/principal.js'
		);

		$this->template->set_additional_css($styles);
		$this->template->set_additional_js($js);

        //$this->_checkLogin();
        $this->template->set_title('Principal');
        $this->template->set_template('principal');
    }

	function index()
	{
		//$this->template->load_sub('sections', $this->section_model->section_list());
        $this->template->load_sub('sections', $this->schedule_model->get_grade_sections());
		$this->template->load('principal/index');
	}

    function schedule_grade_view($grade){
        $this->template->load_sub('schedules', $this->schedule_model->get_grade_schedule($grade));
        $this->template->load_sub('sections', $this->schedule_model->get_grade_section($grade));
        $this->template->load('principal/schedule_view');
    }

	function schedule($grade, $section){
		$this->template->load_sub('schedule', $this->schedule_model->get_schedule($grade, $section));

		$this->template->set_title('Schedule View');
		$this->template->load('principal/schedule_view');
	}

    function view_submitted_schedule($grade, $section, $id)
    {
        $this->template->load_sub('schedule', $this->schedule_model->get_submitted_schedule($id,$grade, $section));
        $this->template->set_title('Schedule View');
        $this->template->load('principal/submitted_schedule');
    }

	function view_submitted_grade_schedule($grade)
    {
		$this->template->load_sub('schedules', $this->schedule_model->view_submitted_grade_schedule($grade));
		$this->template->load_sub('sections', $this->schedule_model->get_grade_section($grade));
        //$this->template->load_sub('schedule', $this->schedule_model->get_submitted_schedule($id,$grade, $section));
        $this->template->set_title('Schedule View');
        $this->template->load('principal/submitted_schedule');
    }

	function view_grade_section($grade, $section)
	{
		$this->template->load_sub('schedules', $this->schedule_model->section_schedule($grade, $section));
		$this->template->load('principal/section-schedule');
	}

	function view_grade_sched($grade)
	{
		$this->template->load_sub('schedules', $this->schedule_model->section_schedule($grade));
		$this->template->load('principal/section-schedule');
	}

	function approve_schedule(){
		$id = $this->input->post('id');
		$grade = $this->input->post('grade');

		$result = $this->schedule_model->approve_schedule($id, $grade);
		if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Schedule approved!<span class="close" data-dismiss="alert">×</span></div>');
			echo json_encode(array('success' => TRUE));
		}else{
			echo json_encode(array('success' => FALSE));
		}
		// if ($result) {
		// 	$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Schedule approved!<span class="close" data-dismiss="alert">×</span></div>');
		// 	redirect('principal/', 'refresh');
		// }
	}

	function update_sched()
	{
		$grade = $this->input->post('grade');

		$result = $this->schedule_model->update_schedule($grade);
		if ($result) {
			echo json_encode(array('success' => TRUE));
		}else{
			echo json_encode(array('success' => FALSE));
		}
	}

	function settings()
	{
		$this->template->load_sub('seting', $this->principal_model->get_setting());
		$this->template->load('principal/seting');
	}

    function save_principal(){
    	$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('position', 'Position', 'required');
    	$this->form_validation->set_rules('lname', 'Lastname', 'required');
    	$this->form_validation->set_rules('fname', 'Firstname', 'required');
    	$this->form_validation->set_rules('mname', 'Middlename', 'required');
    	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
    	$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
    	$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/add_principal');
    	}else{
    		$data  = array(
    			'title' => $this->input->post('title'),
    			'position' => $this->input->post('position'),
    			'lname' => $this->input->post('lname'),
    			'fname' => $this->input->post('fname'),
    			'mname' => $this->input->post('mname'),
    			'email' => $this->input->post('email'),
    			'password' => sha1($this->input->post('password')),
                'user_type' => 2
    		);
    		$result = $this->principal_model->save_principal($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New principal successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('principals', 'refresh');
    		}
    	}
    }

    function update_user(){
    	$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('position', 'Position', 'required');
    	$this->form_validation->set_rules('lname', 'Lastname', 'required');
    	$this->form_validation->set_rules('fname', 'Firstname', 'required');
    	$this->form_validation->set_rules('mname', 'Middlename', 'required');
    	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/edit_user');
    	}else{
    		$data  = array(
    			'title' => $this->input->post('title'),
    			'position' => $this->input->post('position'),
    			'lname' => $this->input->post('lname'),
    			'fname' => $this->input->post('fname'),
    			'mname' => $this->input->post('mname'),
    			'email' => $this->input->post('email')
    		);
    		$result = $this->user_model->update_user($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Principals successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('principals', 'refresh');
    		}
    	}
    }

    function activate_principal($id)
    {
    	$result = $this->principal_model->activate_principal($id);
    	if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Principal account Activated!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('principals', 'refresh');
		}
    }

    function deactivate_principal($id){
    	$result = $this->principal_model->deactivate_principal($id);
    	if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Principal account Deactivated!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('principals', 'refresh');
		}
    }

	function change_pass()
	{
		$this->template->load('principal/change_pass');
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
    			redirect('principal/change_pass', 'refresh');
    		}else{
				$this->session->set_flashdata('success', '<div class="alert alert-danger fade in m-b-15"><strong>Failed!</strong> Password updated failed!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('principal/change_pass', 'refresh');
			}
    	}
	}

	function edit_profile(){
		$this->template->load_sub('user', $this->user_model->fetch_user($this->session->userdata('id')));
		$this->template->load('principal/edit-profile');
	}

	function update_profile()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('position', 'Position', 'required');
    	$this->form_validation->set_rules('lname', 'Lastname', 'required');
    	$this->form_validation->set_rules('fname', 'Firstname', 'required');
    	$this->form_validation->set_rules('mname', 'Middlename', 'required');
    	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
    	if ($this->form_validation->run() == FALSE) {
    		$this->edit_profile();
    	}else{
    		$data  = array(
    			'title' => $this->input->post('title'),
    			'position' => $this->input->post('position'),
    			'lname' => $this->input->post('lname'),
    			'fname' => $this->input->post('fname'),
    			'mname' => $this->input->post('mname'),
    			'email' => $this->input->post('email')
    		);
    		$result = $this->user_model->update_profile($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Principal successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('principal/edit_profile', 'refresh');
    		}
    	}
	}
}
