<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('user_model');

    }

    public function index()
    {
        $data = array(
            'title' => 'Login Page'
        );
        $this->load->view('login', $data);
    }
}