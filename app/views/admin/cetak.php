<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Perpustakaan.xls");
?>
<center>
<h1>
Laporan Perpustakaan
</h1>
</center>
<table class="table table-hover">
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
<?php ?>