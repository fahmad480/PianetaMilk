<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="icon" href="<?= base_url('/favicon.ico'); ?>" type="image/png">
    <?= @$additional_css; ?>

    <title><?= $title . " | " . getenv('app.name') ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('/') ?>"><img src="<?= base_url('/assets/img/logo.png'); ?>" alt="logo" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/aboutus') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/business') ?>">Bisnis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/products') ?>">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/subscribe') ?>">Berlangganan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/zipcheck') ?>">Cek Kode Pos Anda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/contactus') ?>">Hubungi Kami</a>
                </li>
            </ul>
            <span>
                <?php if (logged_in()) : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="mr-2" height="40" width="40" style="object-fit: cover; border-radius: 50%;" src="<?= base_url(user()->toArray()['profile_pict']); ?>" alt="profile"><?= user()->toArray()['full_name']; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item">
                                    Ubah Data Akun
                                </a>
                                <a href="#" class="dropdown-item">
                                    Sejarah Transaksi
                                </a>
                                <a href="/logout" class="dropdown-item">
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                <?php else : ?>
                    <a class="text-grey" href="<?= base_url('login'); ?>">Login/Register</a>
                <?php endif; ?>
            </span>
        </div>
    </nav>