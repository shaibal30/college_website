<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function form() {
        $this->load->view('login_form');
    }
}
