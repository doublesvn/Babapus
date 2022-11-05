<?php
    class pinjam_model{
        private $table = 'tb_pinjam';
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function getDataPinjam($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE iduser=:id');
            $this->db->bind('id', $id);
            return $this->db->resultSet();
        }
        public function hapusBuku($id,$buku){

            $this->db->query('DELETE  FROM ' . $this->table . ' WHERE iduser=:id and idbuku=:buku');
            $this->db->bind('id', $id);
            $this->db->bind('buku',$buku);
            $this->db->execute();
        }
        
    }

?>