<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4 mt-4">
    <h1 class="mb-4">Tambah Produk</h1>
    <?= form_open_multipart(base_url('admin/product_save')); ?>
    <label for="nama">Nama : </label><br>
    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Produk" value="" required=""><br>
    <label for="deskripsi">Deskripsi : </label><br>
    <textarea class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" required=""></textarea><br>
    <label for="harga">Harga : </label><br>
    <input class="form-control" type="number" name="harga" id="harga" placeholder="Harga Produk" value="" required=""><br>
    <label for="stok">Stok : </label><br>
    <input class="form-control" type="number" name="stok" id="stok" placeholder="Stok Produk" value="" required=""><br>
    <label for="foto">Foto Produk : </label><br>
    <input type="file" class="form-control-file mb-4" multiple accept='image/*' name="foto" id="foto"><br />
    <input type="submit" class="btn btn-dark float-right" value="Submit">
    <?= form_close(); ?>
</main>
</div>
</div>