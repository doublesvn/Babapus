<?php 
    session_start();
    class Home extends Controller{
        public function index(){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Home";
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('templates/header',$data);
            $this->view('home/index',$data);
            $this->view('templates/footer',$data);
        }
        public function perpus(){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Home";
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('templates/header',$data);
            $this->view('home/buku',$data);
            $this->view('templates/footer',$data);
        }
        public function detail($id){
            $data['title'] = 'Detail Barang';
            $data['idbuku'] = $this->model('Home_model')->getDataById($id);
            $this->view('templates/header', $data);
            $this->view('home/detail', $data);
            $this->view('templates/footer');
        }
        public function halkonfir($id){
            $data['title'] = 'Detail Barang';
            $data['idbuku'] = $this->model('temporary_model')->getDetailBusur($id);
           
            $this->view('admin/header', $data);
            $this->view('admin/konfirmasi', $data);
            $this->view('templates/footer');
        }

        public function bukabuku($id){
            $data['title'] = 'Detail Barang';
            $data['idbuku'] = $this->model('Home_model')->getDataById($id);
            $this->view('templates/header', $data);
            $this->view('home/bacabuku', $data);
            $this->view('templates/footer');
        }
        public function accBusur($id){
            $data['title'] = 'Detail Barang';
            $data['idbuku'] = $this->model('temporary_model')->getDetailBusur($id);
            $iduser =  $data['idbuku']['iduser'];
            $judul = $data['idbuku']['judul'];
            $penulis = $data['idbuku']['penulis'];
            $kategori = $data['idbuku']['kategori'];
            $ringkasan = $data['idbuku']['ringkasan'];
            $stok = $data['idbuku']['stok'];
            $pdf=$data['idbuku']['buku'];
            $this->model('Home_model')->addBuku($judul, $penulis,$kategori,$ringkasan,$stok,$pdf);
            $pesan='yang anda kirim DITERIMA';
            $this->model('notif_model')->tambahNotif($iduser,$judul,$pesan);
            $data['idbuku'] = $this->model('temporary_model')->hapusBusur($id);

            $this->view('admin/header', $data);
            $this->view('home/transaksi', $data);
            $this->view('templates/footer');
        }
        public function denBusur($id){
            $data['title'] = 'Detail Barang';
            $pesan=' yang anda kirim DITOLAK';
            $this->model('notif_model')->tambahNotif($iduser,$judul,$pesan);
            $data['idbuku'] = $this->model('temporary_model')->hapusBusur($id);

            $this->view('admin/header', $data);
            $this->view('home/transaksi', $data);
            $this->view('templates/footer');
        }

        public function updatebuku(){
            $data['title'] = 'Detail Barang';
            $idbuku = $_POST['id'];
            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $kategori = $_POST['kategori'];
            $ringkasan = $_POST['ringkasan'];
            $stok = $_POST['stok'];
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="pdf/".$pdf;
            move_uploaded_file($pdf_tem_loc,$pdf_store);
            $this->model('Home_model')->upBuku($idbuku,$judul, $penulis,$kategori,$ringkasan,$stok,$pdf);
            
            $this->view('admin/header',$data);
            $this->view('home/transaksi');
            $this->view('templates/footer');
        }

        public function kategori($idjenis){
            if($idjenis == 1){
                $data['nama'] = "Babapus";
                $data['title'] = "Halaman Kategori Cangkir";
                $data['id_jenis'] = $this->model('Home_model')->getDatabyJenis($idjenis);
                $this->view('templates/header', $data);
                $this->view('home/cangkir', $data);
                $this->view('templates/footer');
            }else if($idjenis == 2){
                $data['nama'] = "Adilkind";
                $data['title'] = "Halaman Kategori Mangkok";
                $data['id_jenis'] = $this->model('Home_model')->getDatabyJenis($idjenis);
                $this->view('templates/header', $data);
                $this->view('home/mangkok', $data);
                $this->view('templates/footer');
            }
        }
        public function bacaan($id){
            $data['iduser'] = $this->model('pinjam_model')->getDataPinjam($id);
            $this->view('templates/header', $data);
            $this->view('home/bacaan',$data);
            $this->view('templates/footer');
        }
        public function notif($id){
            $data['iduser'] = $this->model('notif_model')->getAllNotif($id);
            $this->view('templates/header', $data);
            $this->view('home/notifikasi',$data);
            $this->view('templates/footer');
        }
        
        public function halupuser(){
            $data['title'] = 'Detail Barang';
            $this->view('templates/header', $data);
            $this->view('home/upload');
            $this->view('templates/footer');
        }

        public function uploadbuku(){
                $data['title'] = 'Detail Barang';
                $id = $_POST['iduser'];
                $judul = $_POST['judul'];
                $penulis = $_POST['penulis'];
                $kategori = $_POST['kategori'];
                $ringkasan = $_POST['ringkasan'];
                $stok = $_POST['stok'];
                $pdf=$_FILES['pdf']['name'];
                $pdf_type=$_FILES['pdf']['type'];
                $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                $pdf_store="pdf/".$pdf;
                move_uploaded_file($pdf_tem_loc,$pdf_store);
                $this->model('temporary_model')->upBukuUser($id,$judul, $penulis,$kategori,$ringkasan,$stok,$pdf);
                
                $this->view('templates/header',$data);
                $this->view('home/transaksi');
                $this->view('templates/footer');
        }
        public function kembali($iduser=null,$idbuku=null){
            $username = $_POST['username'];
            $judul = $_POST['judul'];
            date_default_timezone_set('Asia/Jakarta');
            $tglpinjam = $_POST['tglpinjam'];
            $tglkembali = $_POST['tglkembali'];
            $tglpengembalian = date('y-m-d h:i:s');
            $this->model('Lapor_model')->tambahLapor($username,$judul,$tglpinjam,$tglkembali,$tglpengembalian);
            $this->view('templates/header');
            $this->view('home/transaksi');
            $this->view('templates/footer');
            $data['idbuku'] = $this->model('pinjam_model')->hapusBuku($iduser,$idbuku);
            $this->model('Home_model')->tambahStok($idbuku);
            $pesan=' telah anda kembalikan';
            $this->model('notif_model')->tambahNotif($iduser,$judul,$pesan);
        }

        public function checkout(){
            if(!isset($_SESSION['login'])){
                $this->view('templates/header');
                $this->view('login/login');
                $this->view('templates/footer');
            }else{
                $idbuku = $_POST['idbuku'];
                $iduser = $_POST['iduser'];
                $username = $_POST['username'];
                $judul = $_POST['judul'];
                date_default_timezone_set('Asia/Jakarta');
                $tglmulai = date('y-m-d h:i:s');
                $waktu = new DateTime($tglmulai);
                $waktu->modify('+7 day');
                $tglberhenti = $waktu->format('y-m-d h:i:s');
                $pdf=$_POST['buku'];
                $stok = $_POST['jumlah'];
                $stokAkhir = $stok-1;
                $this->view('templates/header');
                $this->view('home/transaksi');
                $this->view('templates/footer');
                
                $this->model('Home_model')->updateStok($idbuku, $stokAkhir);

                $data['id_transaksi'] = $this->model('Transaksi_model')->tambahTransaksi($idbuku,$iduser,$username,$tglmulai,$tglberhenti,$judul,$pdf);
                
                header('location:../home/transaksi');
                $pesan=' telah anda pinjam ';
                $this->model('notif_model')->tambahNotif($iduser,$judul,$pesan);
                
                
            }

            
        }
  
    

        public function halupdate($id){
            $data['title'] = 'Detail Barang';
            $data['idbuku'] = $this->model('Home_model')->getDataById($id);
            $this->view('admin/header', $data);
            $this->view('admin/update', $data);
            $this->view('templates/footer');
        }
        public function haltambah(){
            $data['title'] = 'Detail Barang';
            $this->view('admin/header',$data);
            $this->view('admin/tambah');
            $this->view('templates/footer');
        }

        public function cetak(){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Kelola Buku";
            $data['iduser'] = $this->model('Lapor_model')->getAllLapor();
            $this->view('admin/cetak',$data);
        }

        public function tambahbuku(){
            
            
            try {
                $data['title'] = 'Detail Barang';
                $judul = $_POST['judul'];
                $penulis = $_POST['penulis'];
                $kategori = $_POST['kategori'];
                $ringkasan = $_POST['ringkasan'];
                $stok = $_POST['stok'];
                $pdf=$_FILES['pdf']['name'];
                $pdf_type=$_FILES['pdf']['type'];
                $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                $pdf_store="pdf/".$pdf;
                move_uploaded_file($pdf_tem_loc,$pdf_store);
                $this->model('Home_model')->addBuku($judul, $penulis,$kategori,$ringkasan,$stok,$pdf);
                $pesan='telah anda upload';
                $this->model('notif_model')->tambahNotif($iduser,$judul,$pesan);
                $this->view('admin/header',$data);
                $this->view('home/transaksi');
                $this->view('templates/footer');
             
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }
           

            
        }

        public function transaksi(){
            $this->view('templates/header');
            $this->view('home/transaksi');
            $this->view('templates/footer');
        }

        public function login(){
            $this->view('templates/header');
            $this->view('login/login');
            $this->view('templates/footer');
        }
        public function checkLogin(){
            
            $username = $_POST['username'];
            $pass = $_POST['pass'];

            
            if ($username=='admin'){
                $this->model('Login_model')->cekAdmin($username,$pass);
                $data['idbuku'] = $this->model('Home_model')->getAllData();
                $this->view('admin/header');
                $this->view('admin/index',$data);
                $this->view('templates/footer');
                
            }
            else{      
                $this->model('Login_model')->checkLogin($username,$pass);
                header('location:../home');
                
            }
            
        }

        public function daftar(){
            $this->view('templates/header');
            $this->view('login/tambah');
            $this->view('templates/footer');
        }
        
        public function halkurasi(){
            $data['idbuku'] = $this->model('temporary_model')->getBukuUser();
            $this->view('admin/header');
            $this->view('admin/kurasi',$data);
            $this->view('templates/footer');

        }
        public function homeAdmin(){
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('admin/header');
            $this->view('admin/index',$data);
            $this->view('templates/footer');

        }
        public function tambah(){
            
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];

            $this->model('Login_model')->simpanAkun($nama,$username,$pass);
            session_start();
            header('location:../home');
        }

        public function logout(){

            session_start();
            session_destroy();

            header('location:../home');
        }
        public function kelolabuku(){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Kelola Buku";
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('admin/header',$data);
            $this->view('admin/buku',$data);
            $this->view('templates/footer',$data);
        }
        
        public function kelolaakun(){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Kelola Akun";
            $data['iduser'] = $this->model('Login_model')->getAllAkun();
            $this->view('admin/header',$data);
            $this->view('admin/user',$data);
            $this->view('templates/footer',$data);
        }
        
        public function kelolalapor(){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Kelola Laporan";
            
            $data['iduser'] = $this->model('Lapor_model')->getAllLapor();
            $this->view('admin/header',$data);
            $this->view('admin/lapor',$data);
            $this->view('templates/footer',$data);
        }

        public function hapusbuku($id){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Home";
            $this->model('Home_model')->delBuku($id);
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('admin/header',$data);
            $this->view('admin/buku',$data);
            $this->view('templates/footer');
        }
        public function hapusakun($id){
            $data['nama'] = "Babapus";
            $data['title'] = "Halaman Home";
            $data['iduser'] = $this->model('Login_model')->getAllAkun();
            $this->model('Login_model')->delAkun($id);
            $this->view('admin/header',$data);
            $this->view('admin/user',$data);
            $this->view('templates/footer',$data);
        }
        
    }
?>