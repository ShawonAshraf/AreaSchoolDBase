<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('area_main_view.php');
	}

	public function area_info()
	{
		$this->load->model('area_model');
		$data['area_info'] = $this->area_model->getAreaInfo();
		$this->load->view('area_info', $data);
	}

	public function gov_proj()
	{
		$this->load->model('area_model');
		$data['gov_proj_view'] = $this->area_model->getGovProj();
		$this->load->view('gov_proj_view', $data);
	}

	public function schools()
	{
		$this->load->model('area_model');
		$data['area_school_view'] = $this->area_model->getAllSchools();
		$this->load->view('area_school_view', $data);
	}

}
