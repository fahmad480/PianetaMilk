<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <?php
    if (isset($_GET['status'])) :
    ?>
        <div class="alert alert-<?= $_GET['status']; ?> mt-4" role="alert">
            <?= htmlentities($_GET['message']); ?>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('admin/product/add'); ?>"><button class="btn btn-primary mt-4 mb-4">Tambah Produk</button></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <!-- <th scope="col">Stok</th> -->
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $key => $row) :
            ?>
                <tr>
                    <th scope="row"><?= $key + 1; ?></th>
                    <td><img height="75px" src="<?= base_url($row['image']) ?>" alt="<?= $row['title']; ?>"></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['price']; ?></td>
                    <!-- <td><?= $row['stock']; ?></td> -->
                    <td><?= ($row['status'] == 1) ? "Aktif" : "Nonaktif" ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= base_url('admin/product/edit?id=' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <?php if ($row['status'] == 1) { ?>
                                <a href="<?= base_url('admin/product/disable?id=' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menonaktifkan produk <?= $row['title']; ?>?')"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <a href="<?= base_url('admin/product/enable?id=' . $row['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
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