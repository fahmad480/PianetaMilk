<div class="container mb-4">
    <?php
    if (isset($_GET['status'])) :
    ?>
        <div class="alert alert-<?= $_GET['status']; ?> mt-4" role="alert">
            <?= htmlentities($_GET['message']); ?>
        </div>
    <?php endif; ?>
    <center>
        <h1 class="mt-4 mb-4">Ubah Data Akun</h1>
        <img class="rounded-circle" style="object-fit: cover; object-position: center center; width: 250px; height: 250px;" src="<?= base_url(user()->profile_pict); ?>" alt="<?= user()->full_name; ?>">
    </center>
    <?= form_open_multipart(base_url('account_updates')); ?>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= user()->email; ?>" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Kami menjamin kerahasian akun kamu.</small>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= user()->username; ?>" disabled>
    </div>
    <div class="form-group">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= user()->full_name; ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea type="text" class="form-control" id="alamat" name="alamat"><?= user()->address; ?></textarea>
    </div>
    <div class="form-group">
        <label for="profile">Foto Profil</label>
        <input type="file" class="form-control-file mb-4" multiple="" accept="image/*" id="profile" name="profile">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?= form_close(); ?>
</div>