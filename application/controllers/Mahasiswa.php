<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_mhs');
	}

	public function index()
	{
		$data['dt'] = $this->Mod_mhs->getData();
		$data['content'] = $this->load->view('v_mhs', $data, true);
		$this->load->view('template', $data);
	}
	function add()
	{
		$data['content'] = $this->load->view('v_add', '', true);
		$this->load->view('template', $data);
	}
	function simpan()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' => $jurusan,
			'alamat' => $alamat,
		);
		$this->Mod_mhs->insertdata($data);
		redirect('Mahasiswa');
	}
	function delete($nim)
	{
		// Panggil model untuk menghapus data berdasarkan NIM
		$this->Mod_mhs->deletedata($nim);
		
		// Redirect kembali ke halaman Mahasiswa setelah penghapusan
		redirect('Mahasiswa');
	}
}
