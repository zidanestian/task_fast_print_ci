    <div class="container mt-5 mb-5">
        <h2>Data Produk</h2>
        <a href="<?= site_url('produk/create'); ?>" class="btn btn-primary mb-3">Tambah Produk</a>
        <table id="produkTable" class="table table-striped tabl-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($produk as $item): ?>
                    <tr>
                        <td style="text-align:center"><?= $no++ ?></td>
                        <td><?= $item->nama_produk; ?></td>
                        <td style="text-align:right"><?= $item->harga; ?></td>
                        <td><?= $item->nama_kategori; ?></td>
                        <td><?= $item->nama_status; ?></td>
                        <td style="text-align:center;width:200px">
                            <a href="<?= site_url('produk/edit/' . $item->id_produk); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('produk/delete/' . $item->id_produk); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>