<?php

defined('BASEPATH') or exit('No direct script access allowed');
    class Search extends CI_Controller{
        public function index(){
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('Search/index');
            $this->load->view('layout/footer');
        }
    }

?>