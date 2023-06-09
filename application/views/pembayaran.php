<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. " . number_format($grand_total, '0', ',', '.');
                ?>
            </div><br><br>

            <h3>Masukkan Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="POST">
                <div class="form-group">
                    <label>
                        Nama
                    </label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>
                        Alamat
                    </label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>
                        No. Telepon
                    </label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control">
                </div>

                <div class="form-group">
                    <label>
                        Jasa Pengiriman
                    </label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>JNT</option>
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        BANK
                    </label>
                    <select class="form-control">
                        <option>BNI</option>
                        <option>BRI</option>
                        <option>BCA</option>
                        <option>BTN</option>
                        <option>MANDIRI</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Melakukan Pembayaran ?')"> Pesan</button>


            </form>

        <?php
                } else {
                    echo "<h5>Keranjang Belanja Anda Masih Kosong</h5>";
                }
        ?>
        </div>


        <div class="col-md-2"></div>
    </div>
</div>