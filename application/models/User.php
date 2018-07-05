<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db1 = $this->load->database('first', TRUE);     

    }
 
    public function check_user_password($username,$user_id, $password) {
        $query = $this->db1->get_where('users', array('username' => $username,'user_id' => $user_id,'password' => $password));

        foreach ($query->result() as $row) {
            return $row;
        }

        return false;
    }
}
