    <div id="carouselExampleIndicators" class="carousel slide hero" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            foreach ($carousel as $key => $row) :
                if ($key == 0) {
                    echo '<div class="carousel-item active">';
                } else {
                    echo '<div class="carousel-item">';
                }
            ?>
                <img src="<?= base_url($row['image_url']); ?>" class="d-block w-100" alt="<?= $row['title']; ?>">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title']; ?></h5>
                    <p><?= $row['description']; ?></p>
                </div>
        </div>
    <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row mb-2 m-4">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Product</strong>
                    <h3 class="mb-0">Lihat Kumpulan Produk Kami</h3>
                    <div class="mb-1 text-muted">Pianeta Milk</div>
                    <p class="card-text mb-auto">Pilih Produk Yang Akan Anda Beli Bersama Keluarga Anda</p>
                    <a href="<?= base_url('/products'); ?>" class="stretched-link">Lihat</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="<?= base_url('/assets/img/milk.jpg'); ?>" alt="milk">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">Peternakan Kami</h3>
                    <div class="mb-1 text-muted">Pianeta Milk</div>
                    <p class="mb-auto">Deskripsi Tentang Peternakan PianetaMilk</p>
                    <a href="<?= base_url('/ourfarm'); ?>" class="stretched-link">Lihat</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="<?= base_url('/assets/img/cow-farm.jpg'); ?>" alt="milk">
                </div>
            </div>
        </div>
    </div>