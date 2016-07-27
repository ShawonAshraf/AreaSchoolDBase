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

}
