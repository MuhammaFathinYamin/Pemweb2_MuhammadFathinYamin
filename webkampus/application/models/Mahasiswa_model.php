<?php

    class Mahasiswa_model extends CI_Model {
        
        private $table_m ='mahasiswa';

        public function getAll(){
            $query = $this->db->get($this->table_m);
            return $query->result();
        }
    }


?>