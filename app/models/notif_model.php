<?php
    class notif_model{
        private $table = 'tb_notif';
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function getAllNotif($id){
            $this->db->query('SELECT * FROM ' . $this->table.' WHERE iduser='.$id.' ORDER BY idnotif DESC');
            return $this->db->resultSet();
        }
        public function tambahNotif($iduser,$judul,$notif){
            
            $this->db->query('INSERT INTO ' . $this->table . '(iduser, judul, pesan) 
            VALUES(:iduser,  :judul, :notif)');
            $this->db->bind('iduser',$iduser);
            $this->db->bind('notif',$notif);
            $this->db->bind('judul',$judul);
            $this->db->execute();

            
        }
        
    }

?>