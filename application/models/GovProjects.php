<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GovProjects extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        

        public function getGovProj()
        {
          $q_result = $this->db->query('SELECT AREA_ID, SCHOOL_ID, PROJ_NAME, START_DATE, PROGRESS_PERC, BUDGET, MINISTRY_NAME FROM GOV_PROJECTS');
          return $q_result->result_array();
        }
}
