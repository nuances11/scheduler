<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('section_model');
        $this->load->model('schedule_model');
		$this->load->model('user_model');

        $styles = array(

		);
		$js = array(
			'assets/js/login.js'
		);

		$this->template->set_additional_css($styles);
		$this->template->set_additional_js($js);

        //$this->_checkLogin();
        $this->template->set_title('Home');
        $this->template->set_template('frontend');
    }

    function index(){
		$this->template->load('home/index');
	}

	function schedule_grade_view($grade){
		$this->template->set_title('Schedule - Grade ' . $grade);
        $this->template->load_sub('schedules', $this->schedule_model->get_grade_schedule($grade));
        $this->template->load_sub('sections', $this->schedule_model->get_grade_section($grade));
        $this->template->load('home/schedule_view');
    }

	function sections_academic($grade){
		$this->template->set_title('Section/Academic/Track');
		$this->template->load_sub('sections', $this->section_model->get_sections($grade));
		$this->template->load('home/sections_academic');
	}

	function schedule($grade, $section){
		$this->template->load_sub('schedule', $this->schedule_model->get_schedule($grade, $section));
		$this->template->set_title('Schedule View');
		$this->template->load('home/schedule_view');
	}

	function logout()
	{
        session_destroy();
        redirect(base_url('login'),'refresh');
    }

	function validate_login()
	{
		//Load Libraries
        $this->load->library('form_validation');
        $this->load->helper('form');


        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required');

		if ($this->form_validation->run() == FALSE) {
            $errors = array(
                "errors" => validation_errors(),
                "success" => FALSE
            );
            echo json_encode($errors);

		}else {
			$user = $this->user_model->get_login_data($this->input->post('email'), sha1($this->input->post('password')));
			// echo '<pre>'
			// . print_r($user) .
			// '</pre>';
			// exit;
            if(!empty($user)){
                $this->session->set_userdata( array(
                    'id' => $user->user_id,
                    'name'=> $user->fname . ' ' . $user->mname  . ' ' . $user->lname,
                    'email'=> $user->email,
					'position'=> $user->position,
					'title'=> $user->title,
                    'type'=> $user->user_type,
                    'isLoggedIn'=>true
                    )
                );
                if ($user->user_type == '1') {
                    echo json_encode(array("success" => TRUE, "userType" => 'Admin'));
                }elseif ($user->user_type == '2') {
                    echo json_encode(array("success" => TRUE, "userType" => 'Principal'));
                }elseif ($user->user_type == '3') {
                    echo json_encode(array("success" => TRUE, "userType" => 'Teacher'));
                }else {
                    echo json_encode(array("success" => FALSE));
                }
            }else {
                echo json_encode(array("errors" => 'Invalid Username or Password'));
            }
		}
	}
}
