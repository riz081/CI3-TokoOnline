<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> Edit Data Product</h3>

    <?php foreach ($barang as $brg) : ?>

        <form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="POST">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="form-group">
                <label>Stock</label>
                <input type="text" name="stock" class="form-control" value="<?php echo $brg->stock ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" value="<?php echo $brg->gambar ?>">

                <button type="submit" class="btn btn-primary btn-sm mt-4" onclick="return confirm('Mengubah Product ?')"><i class="fas fa-save"></i> Save Changes</button>
        </form>

    <?php endforeach; ?>
</div>