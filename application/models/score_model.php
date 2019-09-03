<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Score_model extends CI_Model
{

    function getAllScore()
    {



        $query = "SELECT `score`.*, `students`.*,`course`.*,`class`.*,`teachers`.*,`periode`.*
              FROM `score`
              JOIN `students` ON `score`.`students_id` = `students`.`students_id`
              JOIN `course` ON `score`.`course_id` = `course`.`course_id`
              JOIN `class` ON `score`.`class_id` = `class`.`class_id`
              JOIN `teachers` ON `score`.`teachers_id` = `teachers`.`teachers_id`
              JOIN `periode` ON `score`.`periode_id` = `periode`.`periode_id`";

        return $this->db->query($query)->result_array();
    }
}
