<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MalibaghSchools extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function getSchools()
        {
          $q_result = $this->db->query('SELECT SCHOOL_ID, SCHOOL_NAME, ESTD_YEAR, PUB_PVT, GOVERNMENT_PROJ, NUM_STUDENTS, NUM_TEACHERS
                                        FROM SCHOOL WHERE AREA_ID = 100;');
          return $q_result->result_array();
        }
}
