<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Prak5 extends CI_Model {

	public function InputData($nama, $nim, $ttl, $ipk, $kelas)
	{
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'ttl' => $ttl,
			'ipk' => $ipk,
			'kelas' => $kelas
		);

		$this->db->insert('mahasiswa', $data);
	}

	public function getAllData()
	{
		return $this->db->get('mahasiswa')->num_rows();
	}

	public function limitData($number, $offset)
	{

		return $query = $this->db->get('mahasiswa', $number, $offset)->result();

	}

	public function getMhs($nim)
	{
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);

		$query = $this->db->get();
		return $query->result();
	}

	public function Update($nama, $nim, $ttl, $ipk, $kelas)
	{
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'ttl' => $ttl,
			'ipk' => $ipk,
			'kelas' => $kelas
		);

		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}

	public function Hapus($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('mahasiswa');
	}

}

 ?>