<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4 mt-4">
    <h1 class="mb-4">Edit Carousel</h1>
    <?= form_open_multipart(base_url('admin/carousel_update?id=' . $carousel['id'])); ?>
    <label for="gambar">Foto Carousel Sebelumnya</label><br />
    <img src="<?= base_url($carousel['image_url']); ?>" alt="Carousel"><br /><br /><br />
    <label for="judul">Judul : </label><br>
    <input class="form-control" type="text" name="judul" id="judul" placeholder="Nama Produk" value="<?= $carousel['title']; ?>" required=""><br>
    <label for="deskripsi">Deskripsi : </label><br>
    <textarea class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" required=""><?= $carousel['description']; ?></textarea><br>
    <label for="foto">Foto Carousel : </label><br>
    <input type="file" class="form-control-file mb-4" multiple accept='image/*' name="foto" id="foto"><br />
    <input type="submit" class="btn btn-dark float-right" value="Submit">
    <?= form_close(); ?>
</main>
</div>
</div>