<div class="container mt-5">

        <div class="row">
            <div class="col-lg-6">
                <h3>Daftar Cafe </h3>
                <ul class="list-group">
                  <?php foreach( $data['cfe'] as $cfe ) : ?>
                   <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $cfe['Nama Cafe']; ?>
                    <a href="<?= BASEURL; ?>/cafe/detail/<?= $cfe['id']; ?>" class="badge bg-primary">Detail</a>
                   </li>
                  <?php endforeach; ?>
                </ul>

            </div>
        </div>

</div>