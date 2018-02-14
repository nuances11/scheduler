<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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

    function index(){
		$this->template->load('admin/index');
	}

	function users(){
		$this->template->load_sub('users', $this->user_model->fetch_users());
		$this->template->load('admin/users');
	}

	function edit_user($id){
		$this->template->load_sub('user', $this->user_model->fetch_user($id));
		$this->template->load('admin/edit_user');
	}

	function students(){
		$this->template->load('admin/students');
	}

	function sections(){
		$this->template->load('admin/sections');
	}

	function subjects(){
		$this->template->load('admin/subjects');
	}

	function teachers(){
		$this->template->load('admin/teachers');
	}

	function add_user(){
		$this->template->load('admin/add_user');
	}

	function add_student(){
		$this->template->load('admin/add_student');
	}

	function add_section(){
		$this->template->load('admin/add_section');
	}

	function add_subject(){
		$this->template->load('admin/add_subject');
	}

	function add_teacher(){
		$this->template->load('admin/add_teacher');
	}

	function add_sample(){
		
	}
}
