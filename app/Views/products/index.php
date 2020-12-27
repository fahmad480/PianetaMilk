<?php
// dd(user()->toArray());
?>
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
    <?php
    foreach ($products as $key => $row) :
    ?>
        <div class="col-md-3">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <img class="mb-3" style="object-fit: cover;" src="<?= base_url($row['image']); ?>" alt="<?= $row['title']; ?>">
                    <h3 class="mb-2"><?= $row['title']; ?></h3>
                    <div class="mb-2 text-muted">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= round($row['review']['stars'])) {
                                echo '<i class="fa fa-star"></i>';
                            } else {
                                echo '<i class="fa fa-star-o"></i>';
                            }
                        }
                        echo " " . $row['review']['count'] . " Ulasan";
                        ?>
                    </div>
                    <p class="card-text mb-3"><?= substr($row['description'], 0, 99) . "..."; ?></p>
                    <a href="/products/<?= $row['id']; ?>"><button type="button" class="btn btn-secondary">Berlangganan</button></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>