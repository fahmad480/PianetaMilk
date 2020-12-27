</div>

<div class="container-fluid pt-3 pr-5 pl-5 pb-3">
    <div class="row pb-4">
        <div class="col-md-4">
            <img class="img-fluid" style="width:100%;" style="object-fit: cover;" src="<?= base_url('/assets/img/product-example.jpg') ?>" alt="image">
        </div>
        <div class="col-md-8">
            <h1><?= $title; ?></h1>
            <p>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= round($review['stars'])) {
                        echo '<i class="fa fa-star"></i>';
                    } else {
                        echo '<i class="fa fa-star-o"></i>';
                    }
                }
                echo " " . $review['count'] . " Ulasan";
                ?>
            </p>
            <h3>Rp <?= number_format($price, 2); ?> / refill</h3>
            <p><i>
                    <?php
                    if ($stock > 1) {
                        echo 'Stock tersedia';
                    } else {
                        echo 'Stock habis';
                    }
                    ?>
                </i></p>
            <?php
            if (logged_in()) :
                if (isset(user()->toArray()['address'])) :
            ?>
                    <a href="<?= base_url('/products/subscribe/' . $id); ?>"><button class="btn btn-secondary mt-5">Berlangganan</button></a>
            <?php
                endif;
            endif;
            ?>
        </div>
    </div>
    <hr>
    <div class="row pt-4">
        <div class="col-12">
            <?= $description; ?>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h2>Penilaian Produk</h2>
            <div class="p-3 mt-3 mb-3" style="border-style: solid; background-color:lightgrey;">
                <div class="row">
                    <div class="col-2">
                        <h3><?= round($review['stars'], 2) . ' dari 5'; ?></h3>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= round($review['stars'])) {
                                echo '<i class="fa fa-star fa-2x"></i>';
                            } else {
                                echo '<i class="fa fa-star-o fa-2x"></i>';
                            }
                        }
                        ?>
                    </div>
                    <div class="col-10 pl-4">
                        <button class="btn btn-secondary mr-3 mt-2" id="stars-all">Semua</button>
                        <button class="btn btn-secondary mr-3 mt-2" id="stars-5">5 Bintang (xxx Ulasan)</button>
                        <button class="btn btn-secondary mr-3 mt-2" id="stars-4">4 Bintang (xxx Ulasan)</button>
                        <button class="btn btn-secondary mr-3 mt-2" id="stars-3">3 Bintang (xxx Ulasan)</button>
                        <button class="btn btn-secondary mr-3 mt-2" id="stars-2">2 Bintang (xxx Ulasan)</button>
                        <button class="btn btn-secondary mr-3 mt-2" id="stars-1">1 Bintang (xxx Ulasan)</button>
                    </div>
                </div>
            </div>
            <div class="frame" id="review_frame">
                <?php
                // dd($review_data[0]['member']);
                foreach ($review_data as $key => $row) :
                ?>
                    <div class="media text-muted pt-3">
                        <img class="mr-2" width="55" height="55" style="object-fit: cover; border-radius: 50%;" src="<?= base_url($row['member']['profile_pict']); ?>" alt="profile">
                        <div class="media-body pb-3 mb-0">
                            <div>
                                <strong class="text-gray-dark"><?= $row['member']['full_name']; ?></strong><br>
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= round($row['stars'])) {
                                        echo '<i class="fa fa-star"></i>';
                                    } else {
                                        echo '<i class="fa fa-star-o"></i>';
                                    }
                                }
                                ?>
                            </div>
                            <p class="d-block"><?= $row['review']; ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <hr>
            </div>
        </div>
    </div>
</div>