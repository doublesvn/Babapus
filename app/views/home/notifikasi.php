<section id="card" class="card bg-light py-5">    
   
        <div class="container mb-4">
        <div class="col text-center pb-4">
          <h4>Pemberitahuan </h4>
        </div>
        <table class="table table-hover shadow">
            <tbody>
            <?php foreach ($data['iduser'] as $akunb) :?>
                    <tr>
                        <td>Buku <?= $akunb['judul']?> <?= $akunb['pesan']?></td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>
</section>