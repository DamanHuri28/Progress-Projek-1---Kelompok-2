<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_dashboard1 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pengguna_model');
	}
	
	public function index()
	{
		$data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view("layout/headerMember",$data);
		$this->load->view("display/member/dashboard1",$data);
		$this->load->view("layout/footer",$data);
		
		
	}
}