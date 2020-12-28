<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <?php
    if (isset($_GET['status'])) :
    ?>
        <div class="alert alert-<?= $_GET['status']; ?> mt-4" role="alert">
            <?= htmlentities($_GET['message']); ?>
        </div>
    <?php endif; ?>
    <table class="table mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Trx</th>
                <th scope="col">Pembeli</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($transactions as $key => $row) :
            ?>
                <tr>
                    <td><?= "#" . $row['id']; ?></td>
                    <td><?= $row['buyer']['full_name']; ?></td>
                    <td><?= $row['product']['title']; ?></td>
                    <td><?= $row['price']; ?></td>
                    <td><?= $row['date']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <div class="btn-group">
                            <?php if ($row['status'] == "belum lunas") { ?>
                                <a href="<?= base_url('admin/transaction/lunas?id=' . $row['id']); ?>" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin ingin melunaskan transaksi #<?= $row['id']; ?>?')"><i class="fa fa-check"></i></a>
                                <a href="<?= base_url('admin/transaction/batal?id=' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin membatalkan transaksi #<?= $row['id']; ?>?')"><i class="fa fa-times"></i></a>
                            <?php } else if ($row['status'] == "lunas") { ?>
                                <a href="<?= base_url('admin/transaction/refund?id=' . $row['id']); ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin ingin mengembalikan uang untuk transaksi #<?= $row['id']; ?>?')"><i class="fa fa-money"></i></a>
                            <?php } else { ?>
                                <i class="fa fa-times"></i>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</div>
</div>