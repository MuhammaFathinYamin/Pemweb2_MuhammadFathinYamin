
<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->nama = 'Pemrograman Web';
        $this->mk1->sks = 3;
        $this->mk1->kode = 'PW';

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->nama = 'Statistik';
        $this->mk2->sks = 3;
        $this->mk2->kode = 'STK';

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->nama = 'Basis Data';
        $this->mk3->sks = 4;
        $this->mk3->kode = 'BASDAT';

        $all_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['all_mk'] = $all_mk;

    
        $this->load->view('Matakuliah/index', $data);
        
    }
}

?>