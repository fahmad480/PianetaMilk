<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <?php
    if (isset($_GET['status'])) :
    ?>
        <div class="alert alert-<?= $_GET['status']; ?> mt-4" role="alert">
            <?= htmlentities($_GET['message']); ?>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('admin/deliver/add'); ?>"><button class="btn btn-primary mt-4 mb-4">Tambah Pengantaran</button></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Pembeli</th>
                <!-- <th scope="col">Produk Yang Dikirim</th> -->
                <th scope="col">Tanggal Pengantaran</th>
                <th scope="col">Status Pengantaran</th>
                <th scope="col">Komentar Kurir/Pelanggan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($delivery as $key => $row) :
            ?>
                <tr>
                    <th scope="row">#<?= $row['id'] ?></th>
                    <td><?= $row['trx']['buyer']['full_name']; ?></td>
                    <!-- <td><?= $row['trx']['product']['title']; ?></td> -->
                    <td><?= $row['date']; ?></td>
                    <td><?= ($row['status'] == 1) ? "Berhasil" : "Gagal" ?></td>
                    <td><?= $row['comment']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= base_url('admin/deliver/edit?id=' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/deliver/delete?id=' . $row['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</div>
</div>