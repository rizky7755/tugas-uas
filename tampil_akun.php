<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil_akun extends CI_Model 

{

	/*
	 * NAMA CLASS HURUF DEPAN WAJIB KAPITAL
	 */
	
	public function list_akun()
	{
		return $this->db->get('daftar')
;	}
}
