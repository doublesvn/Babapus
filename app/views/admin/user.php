<section id="card" class="card bg-light py-4">    
    <h1 class="mx-auto" style="margin:50px">Tabel Akun</h1>    
        <div class="container p-4">
        <table class="table table-hover shadow">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tombol</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['iduser'] as $akunb) :?>
                <?php 
                    if($akunb['nama'] == 'admin'){
                  ?>
                    
                  <?php }?>
                  <?php 
                    if($akunb['nama'] != 'admin'){
                  ?>
                    <tr>
                        <td><?= $akunb['username']?></td>
                        <td><?= $akunb['nama']?></td>
                        <th scope="col"><a href="<?= BASEURL; ?>/home/hapusakun/<?= $akunb['iduser']?>"><p class="btn btn-primary btn-sm  position-relative" style="bottom:0;right:10px">Hapus</p></a></th>
                    </tr>
                  <?php }?>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>
</section>