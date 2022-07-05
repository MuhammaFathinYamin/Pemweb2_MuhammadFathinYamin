<?php

defined('BASEPATH') or exit('No direct script access allowed');
    class Mahasiswa extends CI_Controller{

        public function index(){
            $this->load->model('mahasiswa_model','mhs');
            $list_mhs = $this->mhs->getAll();
            $data ['list_mhs'] = $list_mhs;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('Mahasiswa/index', $data);
            $this->load->view('layout/footer');
        }

        public function create(){
            
            $data ['title'] = 'Tambah Data Mahasiswa';

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('Mahasiswa/create',$data);
            $this->load->view('layout/footer');            
 
            

        }

        public function save(){
            $this->load->model('mahasiswa_model','mahasiswa');


            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $gender = $this->input->post('gender');
            $tmp_lahir = $this->input->post('tmp_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $ipk = $this->input->post('ipk');
            $prodi = $this->input->post('prodi_kode');

            // kumpilan data
            $data_mhs[] = $nim; // value 1
            $data_mhs[] = $nama; // value 2
            $data_mhs[] = $gender; // value 3
            $data_mhs[] = $tmp_lahir; // value 4
            $data_mhs[] = $tgl_lahir; // value 5
            $data_mhs[] = $ipk; // value 6
            $data_mhs[] = $prodi; // value 7

            // fungsi save data
            $this->mahasiswa->save($data_mhs);

            
            redirect(base_url().'index.php/mahasiswa/view?id='. $nim,'refresh');
        }

        public function view(){

            $nim = $this->input->get('id');
            $this->load->model('mahasiswa_model','mahasiswa');
            $data ['mhs'] = $this->mahasiswa->findById($nim);

            $data ['title'] = 'Action View';
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('Mahasiswa/view',$data);
            $this->load->view('layout/footer');
        }

        public function edit(){
            $id = $this->input->get('id');
            $this->load->model('mahasiswa_model', 'mahasiswa');
            $mhsedit = $this->mahasiswa->findById($id);

            $data ['title'] = 'Update Data Mahasiswa';
            $data ['mhsedit'] = $mhsedit;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('Mahasiswa/update',$data);
            $this->load->view('layout/footer');
            

            
        }
    }

?>