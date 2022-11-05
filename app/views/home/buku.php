<section id="card" class="card bg-light py-5">
      <div class="container mb-4">
        <div class="col text-center pb-4">
          <h4>Pinjam Buku </h4>
        </div>
        <div class="row mb-2">
          <?php 
              // $stop_date = new DateTime('2009-09-30 20:24:00');
              // echo 'date before day adding: ' . $stop_date->format('Y-m-d H:i:s'); 
              // $stop_date->modify('+1 day');
          foreach ($data['idbuku'] as $bukup) :?>
            <div class="col-md">
              <div class="card shadow p-2 mb-2" style="width: 150px">
                <div class="card-body position-relative">
                  <a href="<?= BASEURL; ?>/home/detail/<?= $bukup['idbuku'] ?>"><h6 ><?= $bukup['judul']?></h6 ></a>
                  <p><?= $bukup['penulis']?></p>
                  <?php 
                    if($bukup['stok'] == 0){
                  ?>
                  <p class="btn btn-danger btn-sm disabled position-absolute" style="bottom:0">KOSONG </p><br>
                  <?php }?>
                </div>
            </div>
        </div>
            <?php endforeach; ?>
      </div>
        
         
    </section>