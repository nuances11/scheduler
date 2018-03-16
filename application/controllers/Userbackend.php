<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userbackend extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('schedule_model');

        $styles = array(

		);
		$js = array(
			'assets/js/user.js'
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
        $this->template->load_sub('times', $this->schedule_model->get_times());
		$this->template->load_sub('sections', $this->schedule_model->get_sections());
		$this->template->load_sub('subjects', $this->schedule_model->get_subjects());
		$this->template->load_sub('teachers', $this->schedule_model->get_teachers());
		$this->template->load('user/schedule_add');
	}

	function schedule_save(){
        
    	$this->form_validation->set_rules('grade', 'Grade', 'required');
    	$this->form_validation->set_rules('sec_id', 'Section/Academic/Track', 'required');
    	$this->form_validation->set_rules('sub_id', 'Subject', 'required');
        $this->form_validation->set_rules('day_id', 'Teacher', 'required');
        $this->form_validation->set_rules('time_id', 'Teacher', 'required');
    	$this->form_validation->set_rules('teacher_id', 'Teacher', 'required');

    	if ($this->form_validation->run() == FALSE) {
    		$this->schedule_add();
    		//redirect('userbackend/schedule_add');
    	}else{
            $data = array(
                'grade' => $this->input->post('grade'),
                'sec_id' => $this->input->post('sec_id'),
                'sub_id' => $this->input->post('sub_id'),
                'day_id' => $this->input->post('day_id'),
                'time_id' => $this->input->post('time_id'),
                'teacher_id' => $this->input->post('teacher_id')
            );

    		$result = $this->schedule_model->schedule_save($data);

    		if ($result) {
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Schedule successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('user', 'refresh');
    		}
    	}
    }

    function get_section()
    {
        echo json_encode($this->schedule_model->get_section($this->input->post('grade')));
    }

    function get_available_schedule()
    {
        $grade = $this->input->post('grade');
        $section = $this->input->post('section');
        // $teacher = $this->input->post('teacher');
        // $subject = $this->input->post('subject');
        echo json_encode($this->schedule_model->get_available_schedule($grade, $section));
    }


    function get_available_hour()
    {
        $grade = $this->input->post('grade');
        $section = $this->input->post('section');
        echo json_encode($this->schedule_model->get_available_hour($grade, $section));
    }

    function get_available_day()
    {
        $grade = $this->input->post('grade');
        $section = $this->input->post('section');
        $time = $this->input->post('time_id');
        echo json_encode($this->schedule_model->get_available_day($grade, $section, $time));
    }

    function get_subject(){
       echo json_encode($this->schedule_model->get_available_subject());
    }

    function day_select(){
       echo json_encode($this->schedule_model->get_available_days());
    }

    function time_select(){
        $grade = $this->input->post('grade');
        $section = $this->input->post('section');
        $subject = $this->input->post('subject');
        $day = $this->input->post('day');
        echo json_encode($this->schedule_model->get_available_time($grade, $section, $subject, $day));
    }

    function teacher_select(){
        $grade = $this->input->post('grade');
        $section = $this->input->post('section');
        $subject = $this->input->post('subject');
        $day = $this->input->post('day');
        $time = $this->input->post('time');
        echo json_encode($this->schedule_model->get_available_teacher($grade, $section, $subject, $day, $time));
    }
}
