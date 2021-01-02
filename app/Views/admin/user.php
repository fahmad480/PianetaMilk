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
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($user as $key => $row) :
            ?>
                <tr>
                    <th scope="row"><?= $key + 1; ?></th>
                    <td><img style="height: 75px; width: 75px; object-fit: cover;" src="<?= base_url($row['profile_pict']) ?>" alt="<?= $row['full_name']; ?>"></td>
                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <!-- <td>
                        <div class="btn-group">
                            <a href="<?= base_url('admin/users/edit?id=' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/users/delete?id=' . $row['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                    </td> -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</div>
</div>