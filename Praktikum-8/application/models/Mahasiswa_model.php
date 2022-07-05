<?php

    class Mahasiswa_model extends CI_Model {
        
        private $table_m ='mahasiswa';

        public function getAll(){
            // SELECT * FORM mahasiswa;
            $query = $this->db->get($this->table_m);
            return $query->result();
        }

        public function findById($id){
             // SELECT * FORM mahasiswa WHERE nim=$id;
            $this->db->where('nim',$id);
            $query = $this->db->get($this->table_m);
            return $query->row();
        }

        public function save($data){
            $sql = "INSERT INTO mahasiswa (nim,nama,gender,tmp_lahir,tgl_lahir,ipk,prodi_kode)
                VALUES (?,?,?,?,?,?,?)";
            $this->db->query($sql,$data);
        }
        public function update($data){
            $sql = "UPDATE mahasiswa SET nim=?, nama=?, gender=?,tmp_lahir=?, tgl_lahir=?, ipk=?, prodi_kode=? WHERE nim=?";
            $this->db->query($sql,$data);
            
            
        }

    }



?>