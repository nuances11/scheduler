<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userbackend extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('schedule_model');

        $styles = array(

		);
		$js = array(
			
		);
		
		$this->template->set_additional_css($styles);
		$this->template->set_additional_js($js);
        
        //$this->_checkLogin();
        $this->template->set_title('User');
        $this->template->set_template('userbackend');
    }

    function index(){
		$this->template->load('user/index');
	}

	function schedule_add(){
		$this->template->load_sub('sections', $this->schedule_model->get_sections());
		$this->template->load_sub('subjects', $this->schedule_model->get_subjects());
		$this->template->load_sub('teachers', $this->schedule_model->get_teachers());
		$this->template->load('user/schedule_add');
	}

	function schedule_save(){
    	$this->form_validation->set_rules('grade', 'Grade', 'required');
    	$this->form_validation->set_rules('sec_id', 'Section/Academic/Track', 'required');
    	$this->form_validation->set_rules('sub_id', 'Subject', 'required');
    	$this->form_validation->set_rules('teacher_id', 'Teacher', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->schedule_add();
    		//redirect('userbackend/schedule_add');
    	}else{
    		$data  = array(
    			'grade' => $this->input->post('grade'),
    			'sec_id' => $this->input->post('sec_id'),
    			'sub_id' => $this->input->post('sub_id'),
    			'teacher_id' => $this->input->post('teacher_id'),
    		);
    		$result = $this->schedule_model->save_user($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Schedule successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('user', 'refresh');
    		}
    	}
    }

}
