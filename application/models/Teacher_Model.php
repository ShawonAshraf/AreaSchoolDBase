<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_Model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

}
