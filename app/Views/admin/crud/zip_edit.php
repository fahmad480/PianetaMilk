<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4 mt-4">
    <h1 class="mb-4">Edit Kode Pos</h1>
    <?= form_open_multipart(base_url('admin/zip_update?id=' . $zip['zip'])); ?>
    <label for="zip">Kode Pos : </label><br>
    <input class="form-control" type="text" name="zip" id="zip" placeholder="Kode Pos" value="<?= $zip['zip']; ?>" required="" disabled><br>
    <label for="address">Wilayah : </label><br>
    <textarea class="form-control" type="text" name="address" id="address" placeholder="Nama Wilayah" required=""><?= $zip['address']; ?></textarea><br>
    <input type="submit" class="btn btn-dark float-right" value="Submit">
    <?= form_close(); ?>
</main>
</div>
</div>