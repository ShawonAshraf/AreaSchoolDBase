<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class schoolsbyarea extends CI_Controller {

	public function index()
	{
		$this->load->view('sba');
	}

	public function Malibagh() {
		$this->load->model('MalibaghSchools');
		$data['schools_list'] = $this->MalibaghSchools->getSchools();
		$this->load->view('m_schools_list', $data);
	}

	public function Bashundhara() {
		$this->load->model('BashundharaSchools');
		$data['schools_list'] = $this->BashundharaSchools->getSchools();
		$this->load->view('b_schools_list', $data);
	}

	public function Uttara() {
		$this->load->model('UttaraSchools');
		$data['schools_list'] = $this->UttaraSchools->getSchools();
		$this->load->view('u_schools_list', $data);
	}

}
