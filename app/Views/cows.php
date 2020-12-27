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
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nesciunt ut consectetur expedita cupiditate laborum nam modi magnam, quibusdam vitae optio odio dignissimos distinctio molestias ab voluptatem ad est. Harum!<br /><br />
    <img src="<?= base_url('/assets/img/slide_example.png') ?>" alt="image"><br /></br>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat illum necessitatibus voluptatibus? Error laborum sapiente alias, fugiat tempore dicta libero? Nulla consectetur nihil nobis molestiae cum voluptatem, aut iusto dolore.<br /><br />
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, cupiditate perferendis dolor illo fuga enim velit placeat praesentium tenetur, rem quam quia dicta tempore deserunt in. Ea suscipit recusandae molestiae?<br /><br />
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, voluptates possimus asperiores, fugiat adipisci nam sapiente dolorum rem suscipit modi minus delectus fugit consectetur ullam omnis ab, sint porro commodi!<br /><br />
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam at nulla reiciendis repellendus numquam sit dolores aliquid libero repudiandae in, quibusdam tempore quos quae quidem suscipit illum. Nisi, beatae sequi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur eveniet fuga voluptatem natus optio laudantium et veritatis omnis inventore maiores in ipsum libero deleniti beatae, quidem fugiat? Veniam, expedita eum?<br /><br />
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat earum ipsam, eaque rerum cum qui itaque tempora libero, vitae consequuntur ad nam, amet aut! Ipsam blanditiis quae possimus inventore aperiam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, enim possimus maiores totam nam tempora, libero ullam dolorum vitae ducimus expedita cupiditate corrupti! Fuga, omnis minus? Illum veritatis modi ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eligendi voluptates commodi dolore rem nulla similique dicta aspernatur cumque fugiat minus, provident in a sint, perferendis optio, reprehenderit quia obcaecati?<br /><br />
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ad doloribus neque, perferendis facere ut! Laudantium labore vero iusto quisquam libero natus modi, optio voluptate amet illum, numquam et quaerat.<br /><br />
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maiores veritatis aliquid, possimus autem sit in earum, quo, vero doloribus natus accusantium ducimus ipsa consectetur molestiae impedit nihil ad. Quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi architecto quis accusamus neque harum illum repellat voluptate, minus saepe a vel vitae, iste assumenda totam ad quod expedita. Sunt, doloribus.<br /><br />
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, architecto quas accusantium distinctio molestias cupiditate dicta molestiae, quidem commodi soluta temporibus repellendus est repudiandae culpa delectus sapiente similique ipsam. Inventore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur itaque ab fugiat dolorem repellat voluptas accusantium at nisi culpa recusandae qui rem dolore aperiam molestiae magni, ipsam voluptatum, libero repellendus? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur sunt repellendus similique fuga! Minima tenetur mollitia distinctio! Saepe, eveniet quia consequatur maxime modi, asperiores dolor, nobis illo odit optio sed?
</div>