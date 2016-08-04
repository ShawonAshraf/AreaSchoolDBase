<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School_Model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        
        public function getAllSchools() {
          $q_result = $this->db->select('SCHOOL_ID, AREA_ID, SCHOOL_NAME, ESTD_YEAR, PUB_PVT, GOVERNMENT_PROJ, NUM_STUDENTS, NUM_TEACHERS');
          $this->db->from('SCHOOL');
          return $this->db->get()->result_array();
        }

        public function getAllAreas() {
          $q_result = $this->db->query('SELECT s.SCHOOL_ID, s.AREA_ID, a.AREA_NAME, s.SCHOOL_NAME, s.ESTD_YEAR,
                                        s.PUB_PVT, s.GOVERNMENT_PROJ, s.NUM_STUDENTS, s.NUM_TEACHERS
                                        FROM SCHOOL s JOIN AREA a ON a.AREA_ID = s.AREA_ID');
          return $q_result->result_array();
        }

}
