<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
	public function index()
	{
		$konten = $this->load->view('mobil/list_mobil', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'List Daftar Mobil',
		);

		echo json_encode($data_json);
	}

	public function form_create()
	{

		$konten = $this->load->view('mobil/formTambahMobil', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'Form Tambah Data Mobil',
		);

		echo json_encode($data_json);
	}
}
