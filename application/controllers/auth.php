<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function index()
    {

        $this->load->view('auth/auth_header');
        $this->load->view('auth/login');
        $this->load->view('auth/auth_foot');
    }

    public function register()
    {

        $this->load->view('auth/auth_header');
        $this->load->view('auth/register');
        $this->load->view('auth/auth_footer');
    }
};
