<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4 mt-4">
    <h1 class="mb-4">Edit Produk</h1>
    <?= form_open_multipart(base_url('admin/product_update?id=' . $product['id'])); ?>
    <label for="nama">Nama : </label><br>
    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Produk" value="<?= $product['title']; ?>" required=""><br>
    <label for="deskripsi">Deskripsi : </label><br>
    <textarea class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" required=""><?= $product['description']; ?></textarea><br>
    <label for="harga">Harga : </label><br>
    <input class="form-control" type="number" name="harga" id="harga" placeholder="Harga Produk" value="<?= $product['price']; ?>" required=""><br>
    <label for="stok">Stok : </label><br>
    <input class="form-control" type="number" name="stok" id="stok" placeholder="Stok Produk" value="<?= $product['stock']; ?>" required=""><br>
    <label for="foto">Foto Produk : </label><br>
    <input type="file" class="form-control-file mb-4" multiple accept='image/*' name="foto" id="foto"><br />
    <input type="submit" class="btn btn-dark float-right" value="Submit">
    <?= form_close(); ?>
</main>
</div>
</div>