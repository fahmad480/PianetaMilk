<footer class="footer pb-3">
    <div class="row">
        <div class="col-sm ml-5 mr-5" style="text-align: center;">
            <img src="<?= base_url('/assets/img/logo.png') ?>" alt="logo">
            <h3><?= getenv('app.name') ?></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>
        <div class="col-sm ml-5 mr-5">
            <h3>Tentang Kami</h3>
            <ul class="list-unstyled">
                <a href="<?= base_url('/philosophy') ?>" class="text-grey">
                    <li class="list-item">Filosofi <?= getenv('app.name') ?></li>
                </a>
                <a href="<?= base_url('/history') ?>" class="text-grey">
                    <li class="list-item">Sejarah <?= getenv('app.name') ?></li>
                </a>
                <a href="<?= base_url('/commitment') ?>" class="text-grey">
                    <li class="list-item">Komitmen & Nilai Utama Kami</li>
                </a>
            </ul>
        </div>
        <div class="col-sm ml-5 mr-5">
            <h3>Bisnis</h3>
            <ul class="list-unstyled">
                <a href="<?= base_url('/ourfarm') ?>" class="text-grey">
                    <li class="list-item">Peternakan Kami</li>
                </a>
                <a href="<?= base_url('/cows') ?>" class="text-grey">
                    <li class="list-item">Sapi Kami</li>
                </a>
                <a href="<?= base_url('/zipcheck') ?>" class="text-grey">
                    <li class="list-item">Cek Kode Pos Anda</li>
                </a>
            </ul>
        </div>
        <div class="col-sm ml-5 mr-5">
            <h3>Media Sosial Kami</h3>
            <ul class="list-unstyled">
                <p>Ikuti berita terbaru dari kami</p>
                <a href="https://instagram.com/" class="text-grey"><i class="fa fa-instagram fa-2x mr-3"></i></a>
                <a href="https://facebook.com/" class="text-grey"><i class="fa fa-facebook fa-2x mr-3"></i></a>
                <a href="https://twitter.com/" class="text-grey"><i class="fa fa-twitter fa-2x mr-3"></i></a>
            </ul>
        </div>
    </div>
    <div style="text-align: center;" class="mt-3">
        <p>Made with <i class="fa fa-heart"></i> By Kelompok BX, Copyright &copy; <?= date('Y'); ?></p>
    </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?= @$additional_script; ?>

</body>

</html>