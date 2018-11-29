<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Estimate extends CI_Controller {
    
    
     public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function index()
        {
                $this->load->view('hello');
        }
        public function now()
                {
            $this->load->view('check');
        }
        public function newmo()
                {
            $this->load->view('newmo');
        }
        public function se()
        {
            $this->load->view('se');
        }
}
        
        
  

