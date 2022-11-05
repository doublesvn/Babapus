<section id="card" class="card bg-light py-5">
      <div class="container">
        <div class="col text-center mb-10">
          <h4 class=" mb-10">Tabel Buku User</h4>

        </div>

      </div>
      <div class="container">
        <table class="table table-hover shadow">
            <thead>
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tombol</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['idbuku'] as $bukup) :?>
                    <tr>
                        <td><?= $bukup['idtemp']?></td>
                        <td><?= $bukup['judul']?></td>
                        <td><?= $bukup['penulis']?></td>
                        <td>  <a href="<?= BASEURL; ?>/home/halkonfir/<?= $bukup['idtemp'] ?>"><p class="btn btn-primary btn-sm " style="bottom:0;right:10px">Lihat</p></a>                        </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>