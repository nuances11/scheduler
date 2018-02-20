<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('teacher_model');

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

    function save_teacher(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('mname', 'Middlename', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/add_teacher');
    	}else{
    		$data  = array(
                'title' => $this->input->post('title'),
    			'lname' => $this->input->post('lname'),
    			'fname' => $this->input->post('fname'),
                'mname' => $this->input->post('mname'),
                'gender' => $this->input->post('gender'),
    			'position' => $this->input->post('position'),
    			'address' => $this->input->post('address')
    		);
    		$result = $this->teacher_model->save_teacher($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Teacher successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('teachers', 'refresh');
    		}
    	}
    }

    function update_teacher(){
    	$this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('mname', 'Middlename', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/edit_teacher');
    	}else{
    		$data  = array(
    			'title' => $this->input->post('title'),
                'lname' => $this->input->post('lname'),
                'fname' => $this->input->post('fname'),
                'mname' => $this->input->post('mname'),
                'gender' => $this->input->post('gender'),
                'position' => $this->input->post('position'),
                'address' => $this->input->post('address')
    		);
    		$result = $this->teacher_model->update_teacher($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Teacher successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('teachers', 'refresh');
    		}
    	}
    }
}
