<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_brg ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stock ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-lg btn-danger">
                                            Rp. <?php echo number_format($brg->harga, '0', ',', '.') ?>
                                        </div>
                                    </strong></td>
                            </tr>

                        </table>

                        <span onclick="return confirm('Masukkan Barang ke Keranjang ?')"><?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary" >Add To Cart</div>') ?></span>
                        <span><?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-success" >Back</div>') ?></span>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>