<div class="container mb-4">
    <center>
        <h1 class="mt-4 mb-4">Riwayat Transaksi</h1>
    </center>
    <table class="table mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Trx</th>
                <th scope="col">Pembeli</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kadaluarsa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($transactions != false) :
                foreach ($transactions as $key => $row) :
            ?>
                    <tr>
                        <td><?= "#" . $row['id']; ?></td>
                        <td><?= $row['buyer']['full_name']; ?></td>
                        <td><?= $row['product']['title']; ?></td>
                        <td><?= $row['price']; ?></td>
                        <td><?= $row['status']; ?></td>
                        <td><?= strtoupper($row['payment']); ?></td>
                        <td><?= $row['date']; ?></td>
                        <td><?= $row['expired_date']; ?></td>
                    </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
    <center>
        <h1 class="mt-5 mb-4">Riwayat Pengiriman</h1>
    </center>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Pembeli</th>
                <th scope="col">Produk</th>
                <th scope="col">Tanggal Pengantaran</th>
                <th scope="col">Status</th>
                <th scope="col">Komentar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($delivery != false) :
                foreach ($delivery as $key => $row) :
            ?>
                    <tr>
                        <th scope="row">#<?= $row['id'] ?></th>
                        <td><?= $row['trx']['buyer']['full_name']; ?></td>
                        <td><?= $row['trx']['product']['title']; ?></td>
                        <td><?= $row['date']; ?></td>
                        <td><?= ($row['status'] == 1) ? "Berhasil" : "Gagal" ?></td>
                        <td><?= $row['comment']; ?></td>
                    </tr>
            <?php
                endforeach;
            endif; ?>
        </tbody>
    </table>
</div>