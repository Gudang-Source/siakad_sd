<?php
defined('BASEPATH') or exit('No direct script access allowed');


class T_class_model extends CI_Model
{

    function getAllTc()
    {
        $query = "SELECT `teachers_class`.*,`teachers`.`teachers_name`,`class`.`class_name`
                  FROM `teachers_class`
                  JOIN `teachers` ON `teachers`.`teachers_id` = `teachers_class`.`teachers_id`
                  JOIN `class` ON `class`.`class_id` = `teachers_class`.`class_id`";

        return $this->db->query($query)->result_array();
    }

    function getTeachers()
    {
        return $this->db->get('teachers')->result_array();
    }

    function getClass()
    {
        return $this->db->get('class')->result_array();
    }

    function getByTcId($id)
    {
        $query = "SELECT `teachers_class`.*,`teachers`.*,`class`.`class_name`
                  FROM `teachers_class`
                  JOIN `teachers` ON `teachers`.`teachers_id` = `teachers_class`.`teachers_id`
                  JOIN `class` ON `class`.`class_id` = `teachers_class`.`class_id`
                  WHERE `tc_id` = $id";

        return $this->db->query($query)->row_array();
    }
}
