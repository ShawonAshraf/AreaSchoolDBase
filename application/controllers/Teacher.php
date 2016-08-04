<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	
	public function index()
	{
		$this->load->view('teacher_view');
	}
}
