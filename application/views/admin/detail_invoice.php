<div class="container-fluid">

    <h5>Detail Pemesanan <div class="btn btn-sm btn-success">
            No. Invoice <?php echo $invoice->id ?>
        </div>
    </h5>

    <table class="table table-bordered table-hover table-stripped mt-4">
        <tr>
            <th>No.</th>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Satuan Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no = 1;
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $psn->id_brg ?></td>
                <td><?php echo $psn->nama_brg ?></td>
                <td><?php echo $psn->jumlah ?></td>
                <td>Rp. <?php echo number_format($psn->harga, 0, ',', '.') ?></td>
                <td>Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="5" align="center">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary"> Kembali</div>
    </a>

</div>