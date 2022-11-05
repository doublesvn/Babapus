    <section id="card" class="card bg-light py-5">
      <div class="container mb-4">
        <div class="col text-center pb-4">
          <h4>Buku Anda</h4>
        </div>
        <div class="row mb-4">
          <?php foreach ($data['iduser'] as $bukup) :?>
            <div class="col-md">
              <div class="card shadow p-3" style="width: 300px;">
                <div class="card-body">
                    <a href="<?= BASEURL; ?>/home/bukabuku/<?= $bukup['idbuku'] ?>"><h6 class="card-title"><?= $bukup['judul']?></h6></a>
                  <form action="<?= BASEURL; ?>/home/kembali/<?= $_SESSION['id']?>/<?= $bukup['idbuku'] ?>" method="POST" >
                    <input hidden class ="card-title" type="text" id="judul" name="judul" value="<?= $bukup['judul']?>">
                    <input hidden class ="card-title" type="text" id="tglpinjam" name="tglpinjam" value="<?= $bukup['tglpinjam']?>">
                    <input hidden class ="card-title" type="text" id="tglkembali" name="tglkembali" value="<?= $bukup['tglkembali']?>">
                    <input hidden class ="card-title" type="text" id="username" name="username" value="<?= $_SESSION['username']?>">
                    <p>Sampai <?=$bukup['tglkembali']?></p>
                    <button  type="submit"  class="btn btn-primary btn-sm">Kembali</button>
                  </form>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    