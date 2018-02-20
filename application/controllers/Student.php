<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('student_model');

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

    function save_student(){
        //$this->form_validation->set_rules('studno', 'Mobile Number ', 'required|regex_match[/^[0-9]$/]');
        $this->form_validation->set_rules('studno', 'Student Mobile', 'required');
    	$this->form_validation->set_rules('lname', 'Lastname', 'required');
    	$this->form_validation->set_rules('fname', 'Firstname', 'required');
    	$this->form_validation->set_rules('mname', 'Middlename', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/add_student');
    	}else{
    		$data  = array(
                'studno' => $this->input->post('studno'),
    			'lname' => $this->input->post('lname'),
    			'fname' => $this->input->post('fname'),
                'mname' => $this->input->post('mname'),
    			'gender' => $this->input->post('gender'),
    			'address' => $this->input->post('address')
    		);
    		$result = $this->student_model->save_student($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Student successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('students', 'refresh');
    		}
    	}
    }

    function check_studno(){
        $checkno = $this->student_model->studno_check();

        if($checkno){
            echo json_encode(
                array(
                    "status" => 'Student number is already exist!'
                )
            );
            exit(); 
        }

        echo json_encode(
            array(
                "status" => ''
            )
        );
        exit(); 
    }

    function update_student(){
    	$this->form_validation->set_rules('studno', 'Student Number', 'required');
    	$this->form_validation->set_rules('lname', 'Lastname', 'required');
    	$this->form_validation->set_rules('fname', 'Firstname', 'required');
    	$this->form_validation->set_rules('mname', 'Middlename', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
    	$this->form_validation->set_rules('address', 'Address', 'required');
    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/edit_student');
    	}else{
    		$data  = array(
    			'studno' => $this->input->post('studno'),
                'lname' => $this->input->post('lname'),
                'fname' => $this->input->post('fname'),
                'mname' => $this->input->post('mname'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address')
    		);
    		$result = $this->student_model->update_student($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Student successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('students', 'refresh');
    		}
    	}
    }
}
