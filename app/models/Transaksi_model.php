<?php
    class Transaksi_model{
        private $table = 'tb_pinjam';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function tambahTransaksi($idbuku,$iduser,$username,$tglmulai,$tglberhenti,$judul,$pdf){

            
            $this->db->query('INSERT INTO ' . $this->table . '(idbuku,iduser,username,tglpinjam,tglkembali,judul,buku) 
            VALUES(:idbuku,:iduser,:username, :tglpinjam, :tglkembali, :judul,:buku)');
            $this->db->bind('idbuku',$idbuku);
            $this->db->bind('iduser',$iduser);
            $this->db->bind('username',$username);
            $this->db->bind('tglpinjam',$tglmulai);
            $this->db->bind('tglkembali',$tglberhenti);
            $this->db->bind('judul',$judul);
            $this->db->bind('buku',$pdf);
            $this->db->execute();

            
        }
    }