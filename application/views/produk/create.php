    <div class="container mt-5">
        <h2>Tambah Produk</h2>
        <?= form_open('produk/store'); ?>
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            <?= form_error('nama_produk'); ?>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
            <?= form_error('harga'); ?>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $kat): ?>
                    <option value="<?= $kat->id_kategori; ?>"><?= $kat->nama_kategori; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('kategori'); ?>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="">Pilih Status</option>
                <?php foreach ($status as $stat): ?>
                    <option value="<?= $stat->id_status; ?>"><?= $stat->nama_status; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('status'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url(''); ?>" class="btn btn-secondary">Kembali</a>
        <?= form_close(); ?>
    </div>