<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Teachers_model extends CI_Model
{

    function getAllTeachers()
    {
        return $this->db->get('teachers')->result_array();
    }
}
