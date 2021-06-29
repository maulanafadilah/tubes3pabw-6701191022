<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Mainan</h4>
            <a href="/tambah" class="btn btn-info my-3">Tambah data</a>

            <!-- <div class="container"> -->
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>Nama Mainan</th>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($mainan as $row) : ?>

                    <tbody>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama_mainan"]; ?></td>
                            <td><?= $row["merk_mainan"]; ?></td>
                            <td><?= $row["harga"]; ?></td>
                            <td><?= $row["stok"]; ?></td>
                            <td><a class=" btn btn-primary" href="/ubah/<?= $row["id_mainan"]; ?>">Detail</a>
                        </tr>
                    </tbody>

                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
            <!-- </div> -->

        </div>
    </div>
</div>
<?= $this->endSection(); ?>