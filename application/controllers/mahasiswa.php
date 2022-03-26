<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function index()
	{
		$data['nama'] = 'Wina Octaria Saragih';
		$data['nim'] = '201401110';
		$data['kom'] = 'C';
		$this->load->view('mahasiswa_view',$data);
	}
}