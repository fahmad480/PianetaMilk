<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php
    if (isset($_GET['success'])) :
    ?>
        <div class="alert alert-success mt-4" role="alert">
            Data Berhasil diubah!
        </div>
    <?php endif; ?>
    <form action="<?= base_url('/admin/action'); ?>" method="post">
        <h1 class="mt-4 mb-4">Peternakan Kami</h1>
        <input type="hidden" name="title" value="ourfarm">
        <textarea name="isi" id="summernote" cols="30" rows="10"><?= $value; ?></textarea>
        <input type="submit" value="Submit" class="btn btn-secondary mt-4 float-right">
    </form>
</main>
</div>
</div>