    <section id="card" class="card bg-light py-4">
      <div class="container">
        <div class="col text-center">
        <h1 class="mx-auto" style="margin:50px">Tabel Buku</h1>

        </div>
        <a href="<?= BASEURL; ?>/home/haltambah"><p class="btn btn-primary btn-sm " style="bottom:0;right:10px">tambah</p></a>
        

      </div>
      <div class="container">
        <table class="table table-hover shadow">
            <thead>
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Ringkasan</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Tombol</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['idbuku'] as $bukup) :?>
                    <tr>
                        <td><?= $bukup['idbuku']?></td>
                        <td><?= $bukup['judul']?></td>
                        <td><?= $bukup['penulis']?></td>
                        <td><?= $bukup['kategori']?></td>
                        <td><?= $bukup['ringkasan']?></td>
                        <td><?= $bukup['stok']?></td>
                        
                        <td>  <a href="<?= BASEURL; ?>/home/halupdate/<?= $bukup['idbuku'] ?>"><p class="btn btn-primary btn-sm " style="bottom:0;right:10px">Edit</p></a>
                              <a href="<?= BASEURL; ?>/home/hapusbuku/<?= $bukup['idbuku'] ?>"><p class="btn btn-primary btn-sm " style="bottom:0;left:10px">Hapus</p></a></th>
                        </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>