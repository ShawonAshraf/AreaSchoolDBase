<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tm1023 extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getTeachers() {
            $q_result = $this->db->query('SELECT TEACHER_ID, SCHOOL_ID, TEACHER_NAME, EMAIL FROM TEACHER WHERE SCHOOL_ID = 1023');
            return $q_result->result_array();
        }

}
