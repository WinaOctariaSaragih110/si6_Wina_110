<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
    }

    public function index(){
        $this->load->view('web_home');
    }

    public function web_about() {
        $this->load->view('web_about');
    }        
}