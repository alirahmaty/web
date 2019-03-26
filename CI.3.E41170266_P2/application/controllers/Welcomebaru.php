
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcomebaru extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}
 
	public function index3(){	
		$data['nama_web'] = "malas ngoding.com";	
		$this->load->view('view_belajar', $data);
	}
}