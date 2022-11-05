<?php
    class temporary_model{
        private $table = 'tb_temp';
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function getBukuUser(){
            $this->db->query('SELECT * FROM ' . $this->table . '');
            return $this->db->resultSet();
        }
        public function getDetailBusur($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idtemp=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
        public function hapusBusur($idtemp){
            $this->db->query('DELETE  FROM ' . $this->table . ' WHERE idtemp=:buku');
            $this->db->bind('buku',$idtemp);
            $this->db->execute();
        }
        public function upBukuUser($id, $judul, $penulis,$kategori,$ringkasan,$stok,$pdf){
            $this->db->query('INSERT INTO ' . $this->table . '(iduser, judul, penulis, kategori, ringkasan,stok,buku) 
            VALUES(:iduser, :judul,:penulis, :kategori, :ringkasan, :stok,:buku)');
            $this->db->bind('iduser',$id);
            $this->db->bind('judul',$judul);
            $this->db->bind('penulis',$penulis);
            $this->db->bind('kategori',$kategori);
            $this->db->bind('ringkasan',$ringkasan);
            $this->db->bind('stok',$stok);
            $this->db->bind('buku',$pdf);
            $this->db->execute();
        }
    }

?>