<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Newspaper_model extends CI_Model
{

    function getNews()
    {
        return $this->db->get('newspaper')->result_array();
    }
}
