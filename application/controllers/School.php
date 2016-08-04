<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	public function index()
	{
		$this->load->model('School_Model');
		$data['school_list'] = $this->School_Model->getAllSchools();
		$this->load->view('school_view', $data);
	}

	public function schoolsByArea() {
		$this->load->model('School_Model');
		$data['area_list'] = $this->School_Model->getAllAreas();
		$this->load->view('schoolsbyarea', $data);
	}
	

	public function malibag() {
		$this->load->model('school_model');
		$data['school_view'] = $this->school_model->showSchoolMalibag();
		$this->load->view('school_view', $data);
	}

	public function bashundhara() {
		$this->load->model('school_model');
		$data['school_view'] = $this->school_model->showSchoolBas();
		$this->load->view('school_view', $data);
	}

	public function uttara() {
		$this->load->model('school_model');
		$data['school_view'] = $this->school_model->showSchoolU();
		$this->load->view('school_view', $data);
	}
}
