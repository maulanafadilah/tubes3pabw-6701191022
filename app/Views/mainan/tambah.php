<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-5">Tambah Data Mainan</h4>
            <!-- <p class="card-description"> Basic form elements </p> -->
            <form action="mainan/save" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nama_mainan">Nama Mainan</label>
                    <input type="text" class="form-control <?= $validation->hasError('nama_mainan') ? 'is-invalid' : ''; ?>" name="nama_mainan" id="nama_mainan" placeholder="Nama Mainan">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_mainan'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="merk_mainan">Merk</label>
                    <input type="text" class="form-control <?= $validation->hasError('merk_mainan') ? 'is-invalid' : ''; ?>" name="merk_mainan" id="merk_mainan" placeholder="Merk">
                    <div class="invalid-feedback">
                        <?= $validation->getError('merk_mainan'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kategori_mainan">Kategori</label>
                    <select class="form-control <?= $validation->hasError('kategori_mainan') ? 'is-invalid' : ''; ?>" name="kategori_mainan" id="kategori_mainan">
                        <option value="0">Pilih Kategori</option>
                        <option value="Edukasi">Edukasi</option>
                        <option value="Karakter">Karakter</option>
                        <option value="Barbie">Barbie</option>
                        <option value="Lilin">Lilin</option>
                        <option value="Mobil">Mobil</option>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('kategori_mainan'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi_mainan">Deskripsi</label>
                    <textarea class="form-control <?= $validation->hasError('deskripsi_mainan') ? 'is-invalid' : ''; ?>" name="deskripsi_mainan" id="deskripsi_mainan" rows="4"></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('deskripsi_mainan'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control <?= $validation->hasError('harga') ? 'is-invalid' : ''; ?>" name="harga" id="harga" placeholder="harga">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control <?= $validation->hasError('stok') ? 'is-invalid' : ''; ?>" name="stok" id="stok" placeholder="stok">
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
                <button type="submit" class="btn btn-gradient-primary mt-3 mr-2">Submit</button>
                <a href="/" class="btn btn-light mt-3">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>