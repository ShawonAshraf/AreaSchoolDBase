<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HeadMasters extends CI_Controller {

	
	public function index()
	{
		$this->load->view('headmasters_view');
	}
}
