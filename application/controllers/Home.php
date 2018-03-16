<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('section_model');
        $this->load->model('schedule_model');

        $styles = array(

		);
		$js = array(
			
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
}
