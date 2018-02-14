<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('user_model');

        $styles = array(

		);
		$js = array(
			
		);
		
		$this->template->set_additional_css($styles);
		$this->template->set_additional_js($js);
        
        //$this->_checkLogin();
        $this->template->set_title('Admin');
        $this->template->set_template('backend');
    }

    function save_user(){
    	$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('position', 'Position', 'required');
    	$this->form_validation->set_rules('lname', 'Lastname', 'required');
    	$this->form_validation->set_rules('fname', 'Firstname', 'required');
    	$this->form_validation->set_rules('mname', 'Middlename', 'required');
    	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
    	$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
    	$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/add_user');
    	}else{
    		$data  = array(
    			'title' => $this->input->post('title'),
    			'position' => $this->input->post('position'),
    			'lname' => $this->input->post('lname'),
    			'fname' => $this->input->post('fname'),
    			'mname' => $this->input->post('mname'),
    			'email' => $this->input->post('email'),
    			'password' => $this->input->post('password')
    		);
    		$result = $this->user_model->save_user($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New user successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('users', 'refresh');
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
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> User successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('users', 'refresh');
    		}
    	}
    }

    function activate_user($id)
    {
    	$result = $this->user_model->activate_user($id);
    	if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> User account Activated!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('users', 'refresh');
		}
    }

    function deactivate_user($id){
    	$result = $this->user_model->deactivate_user($id);
    	if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> User account Deactivated!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('users', 'refresh');
		}
    }

}
