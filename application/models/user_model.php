<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Controller
{

    function getUser()
    {
        $email = $this->session->userdata('email');

        $user = "SELECT `user`.*,`teachers`.*
                 FROM `user` JOIN `teachers`
                 ON `user`.`teachers_id` = `teachers`.`teachers_id`
                 WHERE `teachers`.`email` = $email";

        return $this->db->query($user)->row_array();
    }
}
