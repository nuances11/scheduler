<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('section_model');

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

    function save_section(){
        $this->form_validation->set_rules('sectionName', 'Section/Academic Track', 'required');
    	$this->form_validation->set_rules('grade', 'Grade', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/add_section');
    	}else{
    		$data  = array(
                'sectionName' => $this->input->post('sectionName'),
                'grade' => $this->input->post('grade'),
    		);
    		$result = $this->section_model->save_section($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Section successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('sections', 'refresh');
    		}
    	}
    }
    function update_section(){
    	$this->form_validation->set_rules('sectionName', 'Section/Academic Track', 'required');
        $this->form_validation->set_rules('grade', 'Grade', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/edit_section');
    	}else{
    		$data  = array(
    			'sectionName' => $this->input->post('sectionName'),
                'grade' => $this->input->post('grade'),
    		);
    		$result = $this->section_model->update_section($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Section successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('sections', 'refresh');
    		}
    	}
    }
}
