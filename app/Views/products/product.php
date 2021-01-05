</div>

<div class="container-fluid pt-3 pr-5 pl-5 pb-3">
    <div class="row pb-4">
        <div class="col-md-4">
            <img class="img-fluid" style="width: 100%; height: 450px; object-fit: cover;" src="<?= base_url($image) ?>" alt="image">
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
            <!-- <p><i>
                    <?php
                    if ($stock > 1) {
                        echo 'Stock tersedia';
                    } else {
                        echo 'Stock habis';
                    }
                    ?>
                </i></p> -->
            <?php
            if (logged_in()) :
                if (isset(user()->toArray()['address'])) {
            ?>
                    <a href="<?= base_url('/products/subscribe/' . $id); ?>"><button class="btn btn-secondary mt-5">Berlangganan</button></a>
                <?php
                } else { ?>
                    <br><br>
                    <p>Silahkan isi alamat kamu terlebih dahulu untuk berlangganan</p>
            <?php    }
            endif;
            ?>
        </div>
    </div>
    <hr>
    <div class="row mt-4">
        <div class="col-12">
            <?= $description; ?>
        </div>
    </div>
    <?php
    if (logged_in()) :
        if ($alreadyBuyOrNot == 1) :
    ?>
            <div class="row mt-4">
                <div class="col-12">
                    <h2>Beri Review</h2>
                    <div id="pesanSendReview">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" <?= (isset($alreadyReview[0]['id']) && $alreadyReview[0]['stars'] == 5) ? 'checked' : ''; ?> />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" <?= (isset($alreadyReview[0]['id']) && $alreadyReview[0]['stars'] == 4) ? 'checked' : ''; ?> />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" <?= (isset($alreadyReview[0]['id']) && $alreadyReview[0]['stars'] == 3) ? 'checked' : ''; ?> />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" <?= (isset($alreadyReview[0]['id']) && $alreadyReview[0]['stars'] == 2) ? 'checked' : ''; ?> />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" <?= (isset($alreadyReview[0]['id']) && $alreadyReview[0]['stars'] == 1) ? 'checked' : ''; ?> />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <textarea name="review" id="review" cols="30" rows="2" class="form-control" placeholder="Masukan review kamu disini"><?= (isset($alreadyReview[0]['id'])) ? $alreadyReview[0]['review'] : ''; ?></textarea>
                        <input type="submit" id="submitReview" name="submitReview" value="<?= (isset($alreadyReview[0]['id'])) ? 'Ubah Review' : 'Kirim Review'; ?>" class="btn btn-secondary mt-3">
                    </div>
                </div>
            </div>
    <?php
        endif;
    endif;
    ?>
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
                        <?php foreach ($countStars as $key => $row) : ?>
                            <button class="btn btn-secondary mr-3 mt-2" id="stars-<?= $row['stars']; ?>"><?= $row['stars']; ?> Bintang (<?= $row['total']; ?> Ulasan)</button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="frame" id="review_frame">
                <?php
                // dd($review_data[0]['member']);
                if ($review_data != false) :
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
                <?php endforeach;
                endif; ?>
                <hr>
            </div>
        </div>
    </div>
</div>