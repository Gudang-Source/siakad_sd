<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Students_model extends CI_Model
{


    function getAllStudents()
    {

        $query = "SELECT `students`.*,`class`.`class_name`
                  FROM `students` JOIN `class`
                  ON `students`.`class_id` = `class`.`class_id`
                    ";

        return $this->db->query($query)->result_array();
    }

    function getStudentById($id)
    {


        $this->db->where('students_id', $id);
        return $this->db->get('students')->row_array();
    }
}
