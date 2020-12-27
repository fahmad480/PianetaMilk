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

<div class="container">
    <center>
        <h1><?= $title; ?></h1>
    </center><br />
    <?= $content; ?>
</div>