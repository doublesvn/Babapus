
    <div class="container pt-5">
            <form action="<?= BASEURL?>/home/tambah" method="POST" class="form-group">
                <div class="card shadow p-5 mb-5">
                    <h4 class="text-center">Form Daftar Akun</h4>
                    <hr>
                    <div class="col-md-12 p-2">
                        <label class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap anda">
                        </div>
                    </div>
                    <div class="col-md-12 p-2">
                        <label class="form-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username anda">
                        </div>
                    </div>
                    <div class="col-md-12 p-2">
                        <label class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan password anda">
                        </div>
                    </div>
                    <div class="col-md-12 p-2">
                    <?php 
                        if(isset($_GET['user'])){
                            if($_GET['user'] == 0){
                            echo "<h6 class='text-danger'>Username atau Password salah</h6>";
                            }
                        }
                        ?>
                    </div>
                    <div class="col-md-12 p-2">
                        <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                        <button type="reset" class="btn btn-lg btn-danger">Batal</button>
                    </div>
                    
                    </div>
                </form>
                
            
      
      
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    