<div class="container-fluid">
    <h5>Invoice Pembayaran Produk</h5>

    <table class="table table-hover table-bordered table-stripped">
        <tr>
            <th>No.</th>
            <th>Id Invoice</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td>
                    <?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-success">Detail</div>') ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>