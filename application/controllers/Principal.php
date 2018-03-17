<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('principal_model');
		$this->load->model('section_model');
		$this->load->model('schedule_model');

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
		$this->template->load_sub('sections', $this->section_model->section_list());
		$this->template->load('principal/index');
	}

	function view_grade_section($grade, $section)
	{
		$this->template->load_sub('schedules', $this->schedule_model->section_schedule($grade, $section));
		$this->template->load('principal/section-schedule');
	}

	function approve_schedule(){
		$id = $this->input->post('id');
		$grade = $this->input->post('grade');
		$section = $this->input->post('section');

		$result = $this->schedule_model->approve_schedule($id, $grade, $section);
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
}
