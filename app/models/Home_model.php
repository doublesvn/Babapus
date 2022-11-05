<?php
    class Home_model{
        private $table = 'tb_buku';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllData(){
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }

        public function getDataById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idbuku=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function getDataByJenis($idjenis){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:idjenis');
            $this->db->bind('kategori', $idjenis);
            return $this->db->resultSet();
        }
        public function upBuku($idbuku, $judul, $penulis, $kategori, $ringkasan ,$stok, $pdf){
            if(!empty($pdf)){
                $sql="UPDATE " . $this->table . " SET judul='$judul', penulis='$penulis', kategori='$kategori', ringkasan='$ringkasan', stok ='$stok', buku='$pdf' WHERE idbuku='$idbuku'";
            }
            else{
                $sql="UPDATE " . $this->table . " SET judul='$judul', penulis='$penulis', kategori='$kategori', ringkasan='$ringkasan', stok ='$stok' WHERE idbuku='$idbuku'";

            }
            $this->db->query($sql);
            $this->db->execute();
            
        }


        public function updateStok($idbuku,$stokAkhir){
            $sql="UPDATE ".$this->table." SET stok='$stokAkhir' WHERE idbuku='$idbuku'";
            $this->db->query($sql);
            $this->db->execute();
        }
        public function tambahStok($idbuku){
            $stokAkhir=1;
            $sql="UPDATE ".$this->table." SET stok=stok+'$stokAkhir' WHERE idbuku='$idbuku'";
            $this->db->query($sql);
            $this->db->execute();
        }

        public function addBuku($judul, $penulis,$kategori,$ringkasan,$stok,$pdf){
            $this->db->query('INSERT INTO ' . $this->table . '(judul, penulis, kategori, ringkasan,stok,buku) 
            VALUES(:judul,:penulis, :kategori, :ringkasan, :stok,:buku)');
            $this->db->bind('judul',$judul);
            $this->db->bind('penulis',$penulis);
            $this->db->bind('kategori',$kategori);
            $this->db->bind('ringkasan',$ringkasan);
            $this->db->bind('stok',$stok);
            $this->db->bind('buku',$pdf);
            $this->db->execute();
        }
        public function delBuku($idbuku){
            $this->db->query('DELETE  FROM ' . $this->table . ' WHERE idbuku=:buku');
            $this->db->bind('buku',$idbuku);
            $this->db->execute();
        }
    }