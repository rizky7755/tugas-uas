<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller 

{

	public function index()
	
	
{		$this->load->view('awal');

	}

	public function home()

	{
		$this->load->view('home');
	}

	public function login()

	{
		$this->load->view('login');
	}

	function simpan_data()

	{
		$data = array 
		
		(
			'idanggota' => $this->input->post('idanggota'),
			'namadepan' => $this->input->post('namadepan'),
			'namabelakang' => $this->input->post('namabelakang'),
			'email' => $this->input->post('email'),
			'nokontrak' => $this->input->post('nokontrak'),
			'alamat' => $this->input->post('alamat')
			
		);

		$this->db->insert ('anggotabelum',$data);
		redirect ('');
	}

}
