<section id="card" class="card bg-light py-4">        
        <div class="container p-4">
          <div class="col text-center pb-4">
            <h4>Upload Buku</h4>
          </div>
            <div class="row mb-4">
                <div class="col-md">
                  <form action="<?= BASEURL; ?>/home/uploadbuku" method="POST" enctype="multipart/form-data">
                    <div class="card shadow p-3 mb-5" >
                        <div class="card-body">
                            <form >
                                <div class="col-md-12">
                                  <p>Judul Buku</p>
                                  <input class="form-control" type="text" name="judul" id="judul">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <p>Kategori Buku</p>
                                  <input class="form-control" type="text" name="kategori" id="kategori">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <p>Penulis Buku</p>
                                  <input class="form-control" type="text" name="penulis" id="penulis" value='<?= $_SESSION['nama']?>'>
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <p>Ringkasan Buku</p>
                                  <textarea class="form-control" type="text" name="ringkasan" id="ringkasan" ></textarea>
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <p>Stok Buku</p>
                                  <input class="form-control" type="text" name="stok" id="stok" >
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <p> Buku</p>
                                  <label for="">Choose Your PDF File</label><br>
                                  <input id="pdf" type="file" name="pdf" value="" required><br><br>
                                  
                                </div>
                                <input hidden class ="card-title" type="text" id="iduser" name="iduser" value="<?= $_SESSION['id']?>">
                                <div class="col-md-12">
                                <button  type="submit" class="btn btn-primary" id="btnBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload</button>
                                </div>
                            
                            </form>


                          </div>
                        </div>
                    </form>
              </div>
          </div>
      </section>