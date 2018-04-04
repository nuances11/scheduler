<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function schedule_save($data){
        return $this->db->insert('schedule', $data);
    }

    function get_sections(){
        $this->db->select('*');
        $this->db->from('sections');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function get_subjects(){
        $this->db->select('*');
        $this->db->from('subjects');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function get_teachers(){
        $this->db->select('*');
        $this->db->from('teachers');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function get_times(){
        $this->db->select('*');
        $this->db->from('time');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    

    function get_schedule($grade, $section)
    {
        $this->db->select('*')
                ->from('schedule')
                ->join('time','schedule.time_id = time.time_id', 'LEFT')
                ->join('subjects','schedule.sub_id = subjects.sub_id', 'LEFT')
                ->join('teachers','schedule.teacher_id = teachers.teacher_id', 'LEFT')
                ->where('schedule.grade', $grade)
                ->where('schedule.sec_id', $section)
                ->where('schedule.sched_status', '1');
        $query = $this->db->get();
        // echo '<pre>';
        // print_r($query->result());
        // echo '</pre>';
        // exit;
        // $query = $this->db->query("
        //     SELECT
        //         sc.*,
        //         sc.sec_id,
        //         sc.grade,
        //         sub.sub_id,
        //         sub.subCode,
        //         sub.subName,
        //         th.teacher_id,
        //         th.title,
        //         th.lname,
        //         d.days,
        //         t.time_id,
        //         t.time_start,
        //         t.time_end
        //     FROM schedule sc
        //     LEFT JOIN subjects sub
        //     ON sc.sub_id = sub.sub_id
        //     LEFT JOIN teachers th
        //     ON sc.teacher_id = th.teacher_id
        //     LEFT JOIN days d
        //     ON sc.day_id = d.days
        //     LEFT JOIN time t
        //     ON sc.time_id = t.time_id
        //     ");
        // echo '<pre>';
        // print_r($query->result());
        // echo '</pre>';
        // exit;
        return $query->result();
    }

    function get_section($grade)
    {
        $this->db->select('*')
                ->from('sections')
                ->where('grade', $grade);
        $query = $this->db->get();
        return $query->result();

    }

    function get_available_schedule($grade, $section)
    {
        $this->db->select('*')
                ->from('schedule')
                ->join('time','schedule.time_id = time.time_id', 'LEFT')
                ->join('subjects','schedule.sub_id = subjects.sub_id', 'LEFT')
                ->join('teachers','schedule.teacher_id = teachers.teacher_id', 'LEFT')
                ->where('schedule.sec_id', $section)
                ->where('schedule.grade', $grade)
                ->where('user_id', $this->session->userdata('id'))
                ->order_by('schedule.time_id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    function get_my_schedule($grade, $section)
    {
        $this->db->select('*')
                ->from('schedule')
                ->join('time','schedule.time_id = time.time_id', 'LEFT')
                ->join('subjects','schedule.sub_id = subjects.sub_id', 'LEFT')
                ->join('teachers','schedule.teacher_id = teachers.teacher_id', 'LEFT')
                ->where('schedule.sec_id', $section)
                ->where('schedule.grade', $grade)
                ->where('user_id', $this->session->userdata('id'))
                ->order_by('schedule.time_id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    function schedule_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('schedule');
    }

    function get_available_hour($grade, $section)
    {
        $time = array();
        $day = array();
        $this->db->select('time_id, day_id')
                ->from('schedule')
                ->where('sec_id', $section)
                ->where('grade', $grade);
        $query = $this->db->get();
        foreach ($query->result() as $taken) {
            array_push($time,$taken->time_id);
            array_push($day,$taken->day_id);
        }

        $times = $this->db->query("
            SELECT
                *
            FROM time
            WHERE time_id NOT IN(
                    SELECT
                        time_id
                    FROM schedule
                    WHERE grade = $grade
                    AND sec_id = $section
                    -- AND sched_status = 1
                )
            ");
        return $times->result();

    }

    function get_available_day($grade, $section, $time)
    {
        $days = $this->db->query("
            SELECT
                *
            FROM days
            WHERE days NOT IN(
                    SELECT
                        day_id
                    FROM schedule
                    WHERE grade = $grade
                    AND sec_id = $section
                    AND time_id = $time
                    -- AND sched_status = 1
                )
            ");
        //return $times->result();
        return $days->result();

    }

    function get_available_subject(){
        $subjects = $this->db->query("
            SELECT
                *
            FROM subjects
            WHERE status = 1
            ");

        return $subjects->result();
    }

    function get_available_days(){
        $days = $this->db->query("
            SELECT
                *
            FROM days
            ");
        return $days->result();
    }

    function get_available_time($grade, $section, $subject, $day){
        $time = $this->db->query("
            SELECT
                *
            FROM time
            WHERE time_id NOT IN(
                    SELECT
                        time_id
                    FROM schedule
                    WHERE grade = $grade
                    AND sub_id = $subject
                    AND sec_id = $section -- AND sched_status = 1
                    AND day_id = '".$day."'
                    
                )
            ");
        return $time->result();
    }

    function get_available_teacher($grade, $section, $subject, $day, $time){
        $teacher = $this->db->query("
            SELECT
                *
            FROM teachers
            WHERE teacher_id NOT IN(
                    SELECT
                        teacher_id
                    FROM schedule
                    WHERE grade = $grade
                    AND sub_id = $subject
                    AND sec_id = $section -- AND sched_status = 1
                    AND day_id = '".$day."'
                    AND time_id = $time
                    
                )
            ");
        return $teacher->result();
    }


    function section_schedule($grade, $section)
    {
        $this->db->select('*')
                ->from('submitted_schedule')
                ->join('users','submitted_schedule.user_id = users.user_id', 'LEFT')
                ->where('submitted_schedule.section_id', $section)
                ->where('submitted_schedule.grade', $grade)
                ->group_by('submitted_schedule.user_id', 'submitted_schedule.section_id', 'submitted_schedule.grade');
        $query = $this->db->get();
        return $query->result();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function get_submitted_schedule($id, $grade, $section)
    {
        // echo 'id - ' . $id . ' grade-' . $grade . ' section - '  . $section;
        // exit; 
        $this->db->select('*')
                ->from('schedule')
                ->join('time','schedule.time_id = time.time_id', 'LEFT')
                ->join('subjects','schedule.sub_id = subjects.sub_id', 'LEFT')
                ->join('teachers','schedule.teacher_id = teachers.teacher_id', 'LEFT')
                ->where('schedule.grade', $grade)
                ->where('schedule.sec_id', $section)
                ->where('schedule.user_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function approve_schedule($id, $grade, $section)
    {
        $this->db->select('*')
                ->from('submitted_schedule')
                ->where('user_id', $id)
                ->where('schedule_status', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $sched = $query->row();
            $data = array(
                'schedule_status' => '0'
            );

            $this->db->where('section_id', $sched->section_id);
            $this->db->where('grade', $sched->grade);
            $res = $this->db->update('submitted_schedule', $data);
            if ($res) {
                $approve = array(
                    'schedule_status' => 1
                );

                $this->db->where('user_id', $id);
                $result =  $this->db->update('submitted_schedule', $approve);
                if ($result) {
                    $sched_status = array(
                        'sched_status' => '1'
                    );

                    $this->db->where('sec_id', $sched->section_id);
                    $this->db->where('grade', $sched->grade);
                    $this->db->where('user_id', $id);
                    return $this->db->update('schedule', $sched_status);
                }
            }
        }
    }

    function schedule_submit($grade, $section, $user)
    {
        $res = FALSE;
        $this->db->select('*')
                ->from('schedule')
                ->where('user_id', $user)
                ->where('sec_id', $section)
                ->where('grade', $grade)
                ->where('sched_status', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $sched) {
                $data = array(
                    'sched_status' => '2'
                );

                $this->db->where('id', $sched->id);
                $res = $this->db->update('schedule', $data);
            }
            if ($res == TRUE) {
                $data = array(
                    'grade' => $grade,
                    'section_id' => $section,
                    'user_id' => $user,
                );

                return $this->db->insert('submitted_schedule' , $data);
            }
        }
    }
}
