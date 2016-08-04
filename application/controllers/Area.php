<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	public function index()
	{
		$this->load->view('area_main_view');
	}

	public function area_info()
	{
		$this->load->model('area_model');
		$data['area_list'] = $this->area_model->getAreaInfo();
		$this->load->view('area_info', $data);
	}

	public function govproj()
	{
		$this->load->model('GovProjects');
		$data['gov_proj_list'] = $this->GovProjects->getGovProj();
		$this->load->view('gov_proj_view', $data);
	}

	public function schools()
	{
		$this->load->model('area_model');
		$data['area_school_view'] = $this->area_model->getAllSchools();
		$this->load->view('area_school_view', $data);
	}

	public function teachers()
	{
		$this->load->model('area_model');
		$data['teacher_view'] = $this->area_model->getAllTeachers();
		$this->load->view('teacher_view', $data);
	}

}
