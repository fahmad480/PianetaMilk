<?php
if (!in_groups('admin')) {
    throw new \CodeIgniter\Exceptions\PageNotFoundException();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $title; ?>">
    <title><?= $title . " | " . getenv('app.name') ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8080/assets/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link rel="icon" href="<?= base_url('/favicon.ico'); ?>" type="image/png">

    <!-- Custom CSS -->
    <?= @$custom_css; ?>

</head>

<body>

    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-light" href="<?= base_url(); ?>"><img src="<?= base_url('/assets/img/logo.png'); ?>" alt="logo" height="40px"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (logged_in()) : ?>
            <div class="btn-group">
                <a class="nav-link" style="color: gray;">
                    <img class="mr-auto" height="40" width="40" style="object-fit: cover; border-radius: 50%;" src="<?= base_url(user()->toArray()['profile_pict']); ?>" alt="profile"> <?= user()->toArray()['full_name']; ?>
                </a>
            </div>
        <?php else : ?>
            <a class="text-grey" href="<?= base_url('login'); ?>">Login/Register</a>
        <?php endif; ?>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('admin/'); ?>">
                                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('admin/products'); ?>">
                                <i class="fa fa-archive" aria-hidden="true"></i> Daftar Produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('admin/transactions'); ?>">
                                <i class="fa fa-history" aria-hidden="true"></i> Riwayat Transaksi
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Action</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/delivery'); ?>">
                                <i class="fa fa-motorcycle" aria-hidden="true"></i> Data Pengiriman
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Pages</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/aboutus'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Tentang Kami
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/business'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Bisnis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/subscribe'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Berlangganan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/contactus'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Hubungi Kami
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/philosophy'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Filosofi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/history'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Sejarah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/commitment'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Komitmen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/ourfarm'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Peternakan Kami
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/admin/cows'); ?>">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i> Sapi Kami
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>