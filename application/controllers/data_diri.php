<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('data_diri');
        $this->load->view('template/footer');
    }

    public function profil(){
        $this->load->view('template/header');
        $this->load->view('profil');
        $this->load->view('template/footer');
    }

    public function edit_profile(){
        $this->load->view('template/header');
        $this->load->view('edit_profil');
        $this->load->view('template/footer');
    }
}