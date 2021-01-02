<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <?php
    if (isset($_GET['status'])) :
    ?>
        <div class="alert alert-<?= $_GET['status']; ?> mt-4" role="alert">
            <?= htmlentities($_GET['message']); ?>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('admin/zipcode/add'); ?>"><button class="btn btn-primary mt-4 mb-4">Tambah Kode Pos</button></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Kode Pos</th>
                <th scope="col">Wilayah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($zip as $key => $row) :
            ?>
                <tr>
                    <td><?= $row['zip']; ?></td>
                    <td><?= $row['address']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= base_url('admin/zipcode/edit?id=' . $row['zip']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/zipcode/delete?id=' . $row['zip']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus kode pos <?= $row['zip']; ?>?')"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</div>
</div>