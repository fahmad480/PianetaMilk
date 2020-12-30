<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4 mt-4">
    <h1 class="mb-4">Tambah Pengantaran</h1>
    <form action="http://localhost:8080/admin/delivery_insert" method="post">
        <label for="trx">Kode Transaksi : </label><br>
        <select class="form-control" id="trx" name="trx" required>
            <?php
            if ($trx_list != false) :
                foreach ($trx_list as $key => $row) :
                    switch ($row['jadwal']) {
                        case "jadwal1":
                            $jadwal = "Senin dan Kamis";
                            break;
                        case "jadwal2":
                            $jadwal = "Selasa dan Jumat";
                            break;
                        case "jadwal3":
                            $jadwal = "Rabu dan Sabtu";
                            break;
                    }

                    switch ($row['paket']) {
                        case "paket1":
                            $paket = "Mingguan";
                            break;
                        case "paket":
                            $paket = "Bulanan";
                            break;
                        case "paket3":
                            $paket = "Tahunan";
                            break;
                    }
            ?>
                    <option value="<?= $row['id']; ?>"><?= $row['id'] . " - " . $row['buyer']['full_name'] . " - " . $row['product']['title'] . " - " . $jadwal . " - " . $paket; ?></option>
            <?php
                endforeach;
            endif;
            ?>
        </select><br>
        <label for="date">Tanggal : </label><br>
        <input class="form-control" type="date" name="date" id="date" placeholder="Tanggal Pengiriman" value="<?= date("Y-m-d"); ?>" required=""><br>
        <label for="status">Status : </label><br>
        <select class="form-control" id="status" name="status">
            <option value="1">Berhasil</option>
            <option value="0">Gagal</option>
        </select><br>
        <label for="comment">Komentar : </label><br>
        <textarea class="form-control" type="number" name="comment" id="comment" placeholder="Komentar" required=""></textarea><br>
        <input type="submit" class="btn btn-dark float-right" value="Submit">
    </form>
</main>
</div>
</div>