<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userbackend extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('schedule_model');
		$this->load->model('user_model');

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

	function change_pass()
	{
		$this->template->load('user/change_pass');
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
    			redirect('userbackend/change_pass', 'refresh');
    		}else{
				$this->session->set_flashdata('success', '<div class="alert alert-danger fade in m-b-15"><strong>Failed!</strong> Password updated failed!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('userbackend/change_pass', 'refresh');
			}
    	}
	}

	function edit_profile(){
		$this->template->load_sub('user', $this->user_model->fetch_user($this->session->userdata('id')));
		$this->template->load('user/edit-profile');
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
    			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> User successfully Updated!<span class="close" data-dismiss="alert">×</span></div>');
    			redirect('userbackend/edit_profile', 'refresh');
    		}
    	}
	}

	function logout()
    {
        session_destroy();
        redirect(base_url('login'),'refresh');
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
                'teacher_id' => $this->input->post('teacher_id'),
				'user_id'=> $this->session->userdata('id')
            );

    		$result = $this->schedule_model->schedule_save($data);

    		if ($result) {
                echo json_encode(array('success' => TRUE));
    			// $this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> New Schedule successfully added!<span class="close" data-dismiss="alert">×</span></div>');
    			// redirect('user', 'refresh');
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

	function get_my_schedule()
	{
		$grade = $this->input->post('grade');
        $section = $this->input->post('section');
        // $teacher = $this->input->post('teacher');
        // $subject = $this->input->post('subject');
        echo json_encode($this->schedule_model->get_my_schedule($grade, $section));
	}

	function schedule_delete($id)
	{
		$result = $this->schedule_model->schedule_delete($id);

		if ($result) {
			$this->session->set_flashdata('success', '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong>Schedule successfully deleted!<span class="close" data-dismiss="alert">×</span></div>');
			redirect('user', 'refresh');
		}
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

    function schedule_submit()
    {
        $grade = $this->input->post('grade');
        $section = $this->input->post('section');
        $user = $this->input->post('user');
        
        $result = $this->schedule_model->schedule_submit($grade, $section, $user);
        if ($result) {
            echo json_encode(array('success' => TRUE));
        }else{
            echo json_encode(array('success' => FALSE));
        }
    }
}
