<section id="card" class="card bg-light py-4">    
    <h1 class="mx-auto" style="margin:50px">Tabel Laporan</h1> 
   
        <div class="container p-4">
        <a href="<?= BASEURL; ?>/home/cetak"><p class="btn btn-primary btn-sm " style="bottom:0;right:10px">CETAK</p></a>

        <table class="table table-hover shadow">
            <thead>
                <tr>
                    <th scope="col">ID Laporan</th>
                    <th scope="col">Username</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['iduser'] as $akunb) :?>
                    <tr>
                        <td><?= $akunb['idlaporan']?></td>
                        <td><?= $akunb['username']?></td>
                        <td><?= $akunb['judul']?></td>
                        <td><?= $akunb['tglpinjam']?></td>
                        <td><?= $akunb['tglkembali']?></td>
                        <td><?= $akunb['tglpengembalian']?></td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>
</section>