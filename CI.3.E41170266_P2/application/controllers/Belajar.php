<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar";
	}
 
	public function halo(){
		echo "ini method halo pada controller belajar";
	}
	public function index1(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	}
 
	public function halo1(){
		$data['nama_web'] = "malas ngoding.com";
		$this->load->view('view_belajar',$data);
	}
 
	function halo4(){
		$data1['penyewaan'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data1);
	}
 
}
