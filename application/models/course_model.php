<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_model extends CI_Model
{
    function getAllCourse()
    {
        return $this->db->get('course')->result_array();
    }
}
