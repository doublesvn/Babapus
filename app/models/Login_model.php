<?php
    class Login_model{

        private $table = 'tb_user';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function checkLogin($username, $pass){

            $this->db->query('SELECT * FROM tb_user WHERE username =:username AND password=:pass');
            $this->db->bind('username', $username);
            $this->db->bind('pass', $pass);
            $hasil = $this->db->single();

            session_start();
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $hasil['iduser'];
                $_SESSION['nama'] = $hasil['nama'];
            
            
        }
        public function cekAdmin($username, $pass){
            $this->db->query('SELECT * FROM tb_user WHERE username =:username AND password=:pass');
            $this->db->bind('username', $username);
            $this->db->bind('pass', $pass);
            $hasil = $this->db->single();
        }

        public function simpanAkun($nama,$username,$pass)
        {
            $this->db->query('SELECT (max(iduser)+1) as maks_id FROM ' . $this->table);
            $data=$this->db->resultSet();
            foreach ($data as $rec){
            $id=$rec["maks_id"];}
            

            $this->db->query('INSERT INTO '.$this->table.'(username,password,nama) VALUES (:username,:password,:nama)');
            // $this->db->bind('iduser', $id);
            $this->db->bind('username', $username);
            $this->db->bind('password', $pass);
            $this->db->bind('nama',$nama);
            $this->db->execute();
            
            
            

            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['nama'] = $nama;
        }
        public function getAllAkun(){
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }
        public function delAkun($iduser){
            $this->db->query('DELETE  FROM ' . $this->table . ' WHERE iduser=:id');
            $this->db->bind('id',$iduser);
            $this->db->execute();
        }
    }

?>