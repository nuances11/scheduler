<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_user($data){
        return $this->db->insert('users', $data);
    }

    function fetch_users(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_type', '3');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function fetch_user($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

     function update_user($data){
        $this->db->where('user_id', $this->input->post('user_id'));
        return $this->db->update('users', $data);
    }

    function update_profile($data){
       $this->db->where('user_id', $this->session->userdata('id'));
       return $this->db->update('users', $data);
   }

    function activate_user($id)
    {
        $data = array (
            'status' => 1
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

    function deactivate_user($id){
        $data = array (
            'status' => 0
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

    function get_login_data($email, $password)
    {
        $query = $this->db->query("
            SELECT
            *
            FROM users
            WHERE email = '".$email."'
            AND password = '".$password."'
            AND status = 1
        ");
        if($query->num_rows() > 0)
        {
            return $query->row();
        }

        return [];
    }

    function change_pass($old_pass, $new_pass)
    {
        $this->db->select('password')
                ->from('users')
                ->where('user_id', $this->session->userdata('id'))
                ->where('password', sha1($old_pass));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = array (
                'password' => sha1($new_pass)
            );
            $this->db->where('user_id', $this->session->userdata('id'));
            return $this->db->update('users', $data);
        }
    }

    function get_total_student()
    {
        $this->db->select('*')
                ->from('students');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_total_teacher()
    {
        $this->db->select('*')
                ->from('teachers');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_total_subject()
    {
        $this->db->select('*')
                ->from('subjects');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_total_schedule()
    {
        $this->db->select('*')
                ->from('schedule');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete_student($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('students');
    }

    function delete_section($id)
    {
        $this->db->where('sec_id', $id);
        return $this->db->delete('sections');
    }

    function delete_suject($id)
    {
        $this->db->where('sub_id', $id);
        return $this->db->delete('subjects');
    }

    function delete_teacher($id)
    {
        $this->db->where('teacher_id', $id);
        return $this->db->delete('teachers');
    }
}
