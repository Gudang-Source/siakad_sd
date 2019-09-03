<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Teachers_course_model extends CI_Model
{

    function getAllTcourse()
    {

        $query = "SELECT `teachers_course`.*,`teachers`.*,`class`.*, `course`.*
                  FROM `teachers_course`
                  JOIN `teachers` ON `teachers`.`teachers_id` = `teachers_course`.`teachers_id`
                  JOIN `course` ON `course`.`course_id` = `teachers_course`.`course_id`
                  JOIN `class` ON `class`.`class_id` = `teachers_course`.`class_id`";

        return $this->db->query($query)->result_array();
    }

    function getTcourseById($id)
    {
        $query = "SELECT `teachers_course`.*,`teachers`.*,`class`.*, `course`.*
                  FROM `teachers_course`
                  JOIN `teachers` ON `teachers`.`teachers_id` = `teachers_course`.`teachers_id`
                  JOIN `course` ON `course`.`course_id` = `teachers_course`.`course_id`
                  JOIN `class` ON `class`.`class_id` = `teachers_course`.`class_id`
                  WHERE `teachers_course`.`tcourse_id` = $id";


        return $this->db->query($query)->row_array();
    }

    function getAllTeachers()
    {
        return $this->db->get('teachers')->result_array();
    }

    function getAllCourse()
    {
        return $this->db->get('course')->result_array();
    }
    function getAllClass()
    {
        return $this->db->get('class')->result_array();
    }
}
