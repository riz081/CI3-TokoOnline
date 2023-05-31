<div class="container-fluid">
    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah_barang"> <i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered table-stripped table-hover mt-3">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td>Rp. <?php echo number_format($brg->harga, '0', ',', '.') ?></td>
                <td><?php echo $brg->stock ?></td>
                <td>
                    <div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>

                <td>
                    <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>') ?>
                </td>

                <td onclick="return confirm('Hapus Product ?')">
                    <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text" name="stock" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Menambah Product ?')"> <i class="fas fa-save"></i> Save changes</button>
            </div>

            </form>
        </div>
    </div>
</div>