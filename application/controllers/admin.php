<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('admin');
	}
	
	public function pendapatan()
	{
		$this->load->view('pendapatan');
	}
	
	public function pengeluaran()
	{
		$this->load->view('edit_pengeluaran');
	}
	
	public function karyawan()
	{
		$this->load->view('daftar_karyawan');
	}
	
	public function edit_karyawan()
	{
		$this->load->view('edit_karyawan');
	}

	public function hutang()
	{
		$this->load->view('daftar_hutang');
	}

	public function daftar_laporan()
	{
		$this->load->view('daftar_laporan');
	}
	
	public function edit_laporan()
	{
		$this->load->view('edit_laporan');
	}
}