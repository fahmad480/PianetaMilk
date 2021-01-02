<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <?php
    if (isset($_GET['status'])) :
    ?>
        <div class="alert alert-<?= $_GET['status']; ?> mt-4" role="alert">
            <?= htmlentities($_GET['message']); ?>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('admin/carousel_add'); ?>"><button class="btn btn-primary mt-4 mb-4">Tambah Carousel</button></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($carousel as $key => $row) :
            ?>
                <tr>
                    <th scope="row"><?= $key + 1; ?></th>
                    <td><img height="75px" src="<?= base_url($row['image_url']) ?>" alt="<?= $row['title']; ?>"></td>
                    <td><?= $row['title']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= base_url('admin/carousel_edit?id=' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/carousel_delete?id=' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus carousel <?= $row['title']; ?>?')"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</div>
</div>