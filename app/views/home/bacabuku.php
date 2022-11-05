<section id="card" class="card bg-light py-4">        
        <div class="container p-4">
            <div class="row mb-4">
                <div class="col-md">
                  <form action="<?= BASEURL; ?>/home" method="POST" enctype="multipart/form-data">
                    <div class="card shadow p-3 mb-5" >
                        <div class="card-body">
                            <input hidden class ="card-title" type="text" id="namaBuku" name="namaBuku" value="<?= $data['idbuku']['judul']?>">
                            <input hidden class ="card-title" type="text" id="idbuku" name="idbuku" value="<?= $data['idbuku']['idbuku']?>">
                            
                            <input hidden class ="card-title" type="text" id="jumlah" name="jumlah" value="<?= $data['idbuku']['stok']?>">
                            <input hidden class ="card-title" type="text" id="deskripsi" name="deskripsi" value="<?= $data['idbuku']['ringkasan']?>">
                            <h1 class="card-title text-center" id="namaBuku" name="namaBuku"><?= $data['idbuku']['judul']?></h1>
                            <input hidden class ="card-title" type="text" id="iduser" name="iduser" value="<?= $_SESSION['id']?>">
                            <input hidden class ="card-title" type="text" id="judul" name="judul" value="<?= $data['idbuku']['judul']?>">
                            <table class="table table-borderless">
                              <tbody>
                                <tr>
                                  <th scope="row">Penulis</th>
                                  <td><p id="namaPenulis" name="namaPenulis"><?= $data['idbuku']['penulis']?></p></td>
                                </tr>
                                <tr>
                                  <th scope="row">Kategori</th>
                                  <td><p id="teksKategori" name="teksKategori"><?= $data['idbuku']['kategori']?></p></td>
                                </tr>
                                <tr>
                                  <th scope="row">Ringkasan</th>
                                  <td colspan="2"><p id="teksRingkasan" name="teksRingkasan"><?= $data['idbuku']['ringkasan']?></p></td>
                                </tr>
                              </tbody>
                            </table>
                            <p><?= BASEURL;?>/pdf/<?= $data['idbuku']['buku']?></p>
                            <embed src="<?= BASEURL;?>/pdf/<?= $data['idbuku']['buku']?>#toolbar=0" type="application/pdf"   height="1500px" width="1000">

                        </div>
                    
                    </form>
                    
            </div>
            

          </div>
      </section>