<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prak5 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Prak5');
	}

	public function Input()
	{
		$this->load->view('Prak5/Input');
	}

	public function Proses_Input()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$ttl = $this->input->post('ttl');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');

		$this->Model_Prak5->InputData($nama, $nim, $ttl, $ipk, $kelas);
		redirect('Prak5/Tampil');
		// echo "berhasil";

	}

	public function Tampil()
	{
		// if (isset($_POST['q'])) {
		// 	$data['ringkasan'] = $this->input->post('cari');

		// 	$this->session->set_userdata('sess_ringkasan', $data['ringkasan']);
		// }
		// else{
		// 	$data['ringkasan'] = $this->session->userdata('sess_ringkasan');
		// }

		$this->load->database();
		$jumlahdata = $this->Model_Prak5->getAllData();

		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/Prak5/Tampil/';
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 5;

		$halaman = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['mahasiswa'] = $this->Model_Prak5->limitData($config['per_page'], $halaman);

		
		$this->load->view('Prak5/Tampil', $data);
	}

	public function Edit()
	{
		$edit['mahasiswa'] = $this->Model_Prak5->getMhs($_GET['nim']);
		$this->load->view('Prak5/Edit', $edit);
	}

	public function Proses_Edit()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$ttl = $this->input->post('ttl');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');

		$this->Model_Prak5->Update($nama, $nim, $ttl, $ipk, $kelas);
		redirect('Prak5/Tampil');
	}

	public function Hapus()
	{
		$hapus = $this->Model_Prak5->Hapus($_GET['nim']);
		redirect('Prak5/Tampil');
	}

}


 ?>