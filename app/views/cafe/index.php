<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Cafe</h3>
            <?php foreach( $data['cfe'] as $cfe ): ?>
            <ul>
             <li><?= $cfe['Nama Cafe']; ?></li>
             <li><?= $cfe['Alamat']; ?></li>
             <li><?= $cfe['Kelas']; ?></li>
             <li><?= $cfe['Harga']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>

</div>