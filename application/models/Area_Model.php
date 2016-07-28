<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area_Model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getAreaInfo()
        {
          $q_result = $this->db->query('SELECT * FROM AREA');
          return $q_result->result_array();
        }

        public function getGovProj()
        {
          $q_result = $this->db->query('SELECT a.AREA_ID, a.AREA_NAME, s.SCHOOL_NAME, g.PROJ_NAME, g.START_DATE, g.START_DATE, g.PROGRESS, g.END_DATE, g.BUDEGT, g.MINISTRY
                                        FROM AREA a, SCHOOL s, GOV_PROJ g
                                        WHERE
                                        a.AREA_ID = g.AREA_ID AND s.SCHOOL_ID = g.SCHOOL_ID;');
          return $q_result->result_array();
        }

        public function getAllSchools()
        {
          $q_result = $this->db->query('SELECT a.AREA_NAME, s.SCHOOL_ID, s.SCHOOL_NAME, s.ESTD_YEAR, s.PUB_PVT, s.NUM_STUDENTS, s.NUM_TEACHERS
                                        FROM AREA a, SCHOOL s
                                        WHERE a.AREA_ID = s.AREA_ID;');
          return $q_result->result_array();
        }
}
