<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas1_model extends CI_Model
{

    function kelas1()
    {
        return $this->db->get_where('students', ['class_id' => 1])->result_array();
    }

    function getAllscoreK1()
    {
        $query = "SELECT `score`.*, `students`.*,`course`.*,`class`.*,`teachers`.*,`periode`.*
              FROM `score`
              JOIN `students` ON `score`.`students_id` = `students`.`students_id`
              JOIN `course` ON `score`.`course_id` = `course`.`course_id`
              JOIN `class` ON `score`.`class_id` = `class`.`class_id`
              JOIN `teachers` ON `score`.`teachers_id` = `teachers`.`teachers_id`
              JOIN `periode` ON `score`.`periode_id` = `periode`.`periode_id`
              WHERE `score`.`class_id` = 1";


        return $this->db->query($query)->result_array();
    }

    function getStudentsById($id)
    {

        $this->db->where('students_id', $id);
        return $this->db->get('students')->row_array();
    }

    function edit($id)
    {
        $edit = "SELECT *
                 FROM `score`
                 JOIN `students` ON `score`.`students_id` = `students`.`students_id`
                 JOIN `course` ON  `score`.`course_id` = `course`.`course_id`
                 JOIN `class` ON `score`.`class_id` = `class`.`class_id`
                 JOIN `teachers` ON `score`.`teachers_id` = `teachers`.`teachers_id`
                 JOIN `periode` ON `score`.`periode_id` = `periode`.`periode_id`
                 WHERE `score_id` = $id";

        return $this->db->query($edit)->row_array();
    }

    function detail($id)
    {
        $detail = "SELECT *
                 FROM `score`
                 JOIN `students` ON `score`.`students_id` = `students`.`students_id`
                 JOIN `course` ON  `score`.`course_id` = `course`.`course_id`
                 JOIN `class` ON `score`.`class_id` = `class`.`class_id`
                 JOIN `teachers` ON `score`.`teachers_id` = `teachers`.`teachers_id`
                 JOIN `periode` ON `score`.`periode_id` = `periode`.`periode_id`
                 WHERE `score`.`students_id` = $id AND `score`.`class_id`= 1";

        return $this->db->query($detail)->result_array();
    }

    function jumlah($id)
    {
        $this->db->where('students_id', $id);
        $this->db->where('class_id', 1);

        $jumlah = $this->db->get('score')->num_rows();

        return $jumlah;
    }
}
