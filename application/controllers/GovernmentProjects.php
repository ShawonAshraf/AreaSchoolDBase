<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GovernmentProjects extends CI_Controller {

	public function index()
	{
		$this->load->model('GovProjects');
		$data['gov_proj_list'] = $this->GovProjects->getGovProj();
		$this->load->view('gov_proj_view', $data);
	}

}
