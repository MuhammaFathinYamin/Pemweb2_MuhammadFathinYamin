<?php

defined('BASEPATH') or exit('No direct script access allowed');
    class Dosen extends CI_Controller{
        public function index(){

            $this->load->model('dosen_model','dosen');
            $list_dosen = $this->dosen->getAll();
            $data ['list_dosen'] = $list_dosen;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('Dosen/index', $data);
            $this->load->view('layout/footer');

        }

    }

?>