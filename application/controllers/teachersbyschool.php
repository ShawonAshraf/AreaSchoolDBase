<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teachersbyschool extends CI_Controller {
	
	public function index() {
		$this->load->view('teacher_view');
	}

    public function tbs1001() {
        $this->load->model('tm1001');
		$data['teachers_list'] = $this->tm1001->getTeachers();
		$this->load->view('tv1001', $data);
    }

    public function tbs1005() {
        $this->load->model('tm1005');
		$data['teachers_list'] = $this->tm1005->getTeachers();
		$this->load->view('tv1005', $data);
    }

    public function tbs1012() {
        $this->load->model('tm1012');
		$data['teachers_list'] = $this->tm1012->getTeachers();
		$this->load->view('tv1012', $data);
    }

    public function tbs1016() {
        $this->load->model('tm1016');
		$data['teachers_list'] = $this->tm1016->getTeachers();
		$this->load->view('tv1016', $data);
    }

    public function tbs1023() {
        $this->load->model('tm1023');
		$data['teachers_list'] = $this->tm1023->getTeachers();
		$this->load->view('tv1023', $data);
    }

    public function tbs1029() {
        $this->load->model('tm1029');
		$data['teachers_list'] = $this->tm1029->getTeachers();
		$this->load->view('tv1029', $data);
    }
}
