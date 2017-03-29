<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_Model');
	}
	public function index($idPegawai)
	{
		
			$data['jabatan_array']=$this->Pegawai_Model->getJabatanByPegawai($idPegawai);
			$this->load->view('jabatan',$data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>