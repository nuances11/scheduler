<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {
	function __construct(){
        parent::__construct();

        $this->load->model('subject_model');

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

    function save_subject(){
        $this->form_validation->set_rules('subCode', 'Subject Code', 'required');
    	$this->form_validation->set_rules('subName', 'Subject Name', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/add_subject');
    	}else{
    		$data  = array(
                'subCode' => $this->input->post('subCode'),
    			'subName' => $this->input->post('subName')
    		);
    		$result = $this->subject_model->save_subject($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Subject successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('subjects', 'refresh');
    		}
    	}
    }

    function update_subject(){
    	$this->form_validation->set_rules('subCode', 'Subject Code', 'required');
        $this->form_validation->set_rules('subName', 'Subject Name', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->template->load('admin/edit_subject');
            //redirect('subject/edit/' . $this->input->post('sub_id'));
    	}else{
    		$data  = array(
    			'subCode' => $this->input->post('subCode'),
                'subName' => $this->input->post('subName')
    		);
    		$result = $this->subject_model->update_subject($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Subject successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('subjects', 'refresh');
    		}
    	}
    }
}
