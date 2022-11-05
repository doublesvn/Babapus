<section id="card" class="card bg-light py-4">        
        <div class="container p-4">
            <div class="row mb-4 shadow">
                <div class="col-md card">
                  <form method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <form >
                                <div class="col-md-12">
                                  <p>ID Buku</p>
                                  <input class="form-control" type="text" name="id" id="id" value="<?= $data['idbuku']['idtemp']?>">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                  <p>ID User</p>
                                  <input class="form-control" type="text" name="id" id="id" value="<?= $data['idbuku']['iduser']?>">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                  <p>Judul Buku</p>
                                  <input class="form-control" type="text" name="judul" id="judul" value="<?= $data['idbuku']['judul']?>">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                  <p>Kategori Buku</p>
                                  <input class="form-control" type="text" name="kategori" id="kategori" value="<?= $data['idbuku']['kategori']?>">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                  <p>Penulis Buku</p>
                                  <input class="form-control" type="text" name="penulis" id="penulis" value="<?= $data['idbuku']['penulis']?>">
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                  <p>Ringkasan Buku</p>
                                  <textarea class="form-control" type="text" name="ringkasan" id="ringkasan" ><?= $data['idbuku']['ringkasan']?></textarea>
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                  <p>Stok Buku</p>
                                  <input class="form-control" type="text" name="stok" id="stok" value="<?= $data['idbuku']['stok']?>" >
                                    <div class="valid-feedback">Data is valid!</div>
                                    <div class="invalid-feedback">Data cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                  <p> Buku</p>
                                  <embed src="<?= BASEURL;?>/pdf/<?= $data['idbuku']['buku']?>#toolbar=0" type="application/pdf"   height="700px" width="500"><br>

                                  
                                </div>
                                <div class="col-md-12 mb-5">
                                  <a class="nav-link btn btn-primary position-absolute  " style="width:100px" href="<?= BASEURL;?>/home/accBusur/<?= $data['idbuku']['idtemp']?>">Terima</a>
                                  <a class="nav-link btn btn-danger position-absolute " style="width:100px;left:150px" href="<?= BASEURL;?>/home/denBusur/<?= $data['idbuku']['idtemp']?>">Tolak</a>
                               
                                </div>
                            
                            </form>


                          </div>
                    </form>
              </div>
          </div>
      </section>