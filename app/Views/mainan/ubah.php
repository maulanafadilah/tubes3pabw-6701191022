<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">Edit Data Mainan</h4>
            <!-- <p class="card-description"> Basic form elements </p> -->

            <?php foreach ($mainan as $row) : ?>
                <div class="col-sm-5 mb-3 mx-auto">
                    <img src="/img/<?= $row['foto']; ?>" class="img-thumbnail  mx-auto">
                </div>

                <form action=" /mainan/update/<?= $row['id_mainan']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_mainan" value="<?= $row['id_mainan']; ?>">
                    <div class="form-group">
                        <label for="nama_mainan">Nama Mainan</label>
                        <input type="text" class="form-control <?= $validation->hasError('nama_mainan') ? 'is-invalid' : ''; ?>" name="nama_mainan" id="nama_mainan" value="<?= $row['nama_mainan']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_mainan'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="merk_mainan">Merk</label>
                        <input type="text" class="form-control <?= $validation->hasError('merk_mainan') ? 'is-invalid' : ''; ?>" name="merk_mainan" id="merk_mainan" value="<?= $row['merk_mainan']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('merk_mainan'); ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <label for="kategori_mainan">Kategori</label>
                        <select class="form-control" name="kategori_mainan" id="kategori_mainan">
                            <option value="Edukasi" <?php if ($row['kategori_mainan'] == 'Edukasi') echo 'selected' ?>>Edukasi</option>
                            <option value="Karakter" <?php if ($row['kategori_mainan'] == 'Karakter') echo 'selected' ?>>Karakter</option>
                            <option value="Barbie" <?php if ($row['kategori_mainan'] == 'Barbie') echo 'selected' ?>>Barbie</option>
                            <option value="Lilin" <?php if ($row['kategori_mainan'] == 'Lilin') echo 'selected' ?>>Lilin</option>
                            <option value="Mobil" <?php if ($row['kategori_mainan'] == 'Mobil') echo 'selected' ?>>Mobil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_mainan">Deskripsi</label>
                        <textarea class="form-control <?= $validation->hasError('deskripsi_mainan') ? 'is-invalid' : ''; ?>" name="deskripsi_mainan" id="deskripsi_mainan" rows="4"><?= $row['deskripsi_mainan']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsi_mainan'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control  <?= $validation->hasError('harga') ? 'is-invalid' : ''; ?>" name="harga" id="harga" value="<?= $row['harga']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control <?= $validation->hasError('stok') ? 'is-invalid' : ''; ?>" name="stok" id="stok" value="<?= $row['stok']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('stok'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Produk</label>
                        <div class="input-group col-xs-12">
                            <input type="file" name="foto" class="form-control <?= $validation->hasError('foto') ? 'is-invalid' : ''; ?>" placeholder="Upload Image">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mt-3 mr-2">Update</button>
                    <a href="/delete/<?= $row['id_mainan']; ?>" class="btn btn-danger mt-3 mr-2" onclick=" return confirm('Yakin ingin menghapus data nilai ini?');">Hapus</a>
                    <a href="/" class="btn btn-light mt-3">Cancel</a>
                <?php endforeach; ?>

                </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>