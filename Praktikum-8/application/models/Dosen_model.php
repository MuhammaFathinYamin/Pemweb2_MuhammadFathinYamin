<?php
    class Dosen_model extends CI_Model {

        private $table = 'dosen';

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }

    }



?>