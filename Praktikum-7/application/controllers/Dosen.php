
<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Zaki Sandi';
        $this->dsn1->nidn = '01103';
        $this->dsn1->gender = 'Laki-laki';
        $this->dsn1->tmp_lahir = 'Jawa';
        $this->dsn1->tgl_lahir = '15-06-1991';
        $this->dsn1->pendidikan = 'S1 Sistem Informasi';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Saniah';
        $this->dsn2->nidn = '01121';
        $this->dsn2->gender = 'Perempuan';
        $this->dsn2->tmp_lahir = 'Jogja';
        $this->dsn2->tgl_lahir = '11-03-1983';
        $this->dsn2->pendidikan = 'S1 Bahasa Inggris';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nama = 'Juandi Hamam';
        $this->dsn3->nidn = '02212';
        $this->dsn3->gender = 'Laki-laki';
        $this->dsn3->tmp_lahir = 'Banten';
        $this->dsn3->tgl_lahir = '10-05-1993';
        $this->dsn3->pendidikan = 'S1 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn4');
        $this->dsn4->id = 4;
        $this->dsn4->nama = 'Aneisha';
        $this->dsn4->nidn = '02105';
        $this->dsn4->gender = 'Perempuan';
        $this->dsn4->tmp_lahir = 'Lampung';
        $this->dsn4->tgl_lahir = '02-10-1994';
        $this->dsn4->pendidikan = 'S1 Kebidanan';

        $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];
        $data['all_dosen'] = $all_dosen;

       
       $this->load->view('layout/header');
       $this->load->view('layout/sidebar');
       $this->load->view('Dosen/index',$data);
       $this->load->view('layout/footer');
       
    }
}