<?php
    class Lapor_model{
        private $table = 'tb_laporan';
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function getAllLapor(){
            $this->db->query('SELECT * FROM ' . $this->table );
            return $this->db->resultSet();
        }
        public function tambahLapor($username,$judul,$tglpinjam,$tglkembali,$tglpengembalian){
            
            $this->db->query('INSERT INTO ' . $this->table . '(username, judul, tglpinjam, tglkembali, tglpengembalian) 
            VALUES(:username, :judul, :tglpinjam, :tglkembali, :tglpengembalian)');
            $this->db->bind('username',$username);
            $this->db->bind('judul',$judul);
            $this->db->bind('tglpinjam',$tglpinjam);
            $this->db->bind('tglkembali',$tglkembali);
            $this->db->bind('tglpengembalian',$tglpengembalian);
            $this->db->execute();

            
        }
        
    }

?>