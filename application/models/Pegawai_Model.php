<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataPegawai()
		{
			$query = $this->db->query("Select * from pegawai");
			return $query->result_array();
		}

		public function getJabatanByPegawai($idPegawai)
		{
			$query = $this->db->query("Select * from pegawai, jabatan_pegawai where pegawai.id = '$idPegawai' and fk_pegawai = '$idPegawai'");
			// $query = $this->db->query("Select * from pegawai join jabatan_pegawai on pegawai.id = jabatan_pegawai.fk_pegawai");
			return $query->result_array();

		}
		public function getAnakByPegawai($idPegawai)
		{
			$query = $this->db->query("select a.nama as namaPegawai, b. * from pegawai as a join anak as b on a.id = b.fk_pegawai where a.id= $idPegawai");
			return $query->result_array();
			
		}

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>