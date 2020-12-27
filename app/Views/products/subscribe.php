<?php
if (logged_in()) {
    if (user()->toArray()['address'] == null) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Silahkan isi alamat kamu untuk berlangganan');
    }
} else {
    throw new \CodeIgniter\Exceptions\PageNotFoundException('Kamu harus login terlebih dahulu');
}
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <center>
            <h1 class="display-4">Terima Kasih</h1>
            <p class="lead">Terima kasih telah percaya dengan layanan kami</p>
        </center>
    </div>
</div>

<div class="mb-2 m-4">
    <form action="<?= base_url('transaction/payment'); ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="product_id" value="<?= $id; ?>">
        <div class="accordion mb-4" id="accordionExample1">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color:grey;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Pilih Jadwal Pengiriman
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="jadwal1" name="jadwal" value="jadwal1" required>
                            <label class="form-check-label" for="jadwal1">
                                Senin dan Kamis
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="jadwal2" name="jadwal" value="jadwal2">
                            <label class="form-check-label" for="jadwal2">
                                Selasa dan Jum'at
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="jadwal3" name="jadwal" value="jadwal3">
                            <label class="form-check-label" for="jadwal3">
                                Rabu dan Sabtu
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion mb-4" id="accordionExample2">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color:grey;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Pilih Paket Berlangganan
                        </button>
                    </h2>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="paket1" name="paket" value="paket1" required>
                            <label class="form-check-label" for="paket1">
                                Mingguan / 2x Pengiriman Harga
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="paket2" name="paket" value="paket2">
                            <label class="form-check-label" for="paket2">
                                Bulanan / 8x Pengiriman Harga
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="paket3" name="paket" value="paket3">
                            <label class="form-check-label" for="paket3">
                                Tahunan / 95x Pengiriman Harga
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion mb-4" id="accordionExample3">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color:grey;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Total Transaksi
                        </button>
                    </h2>
                </div>

                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample3">
                    <div class="card-body">
                        <h1 id="hargatotal" style='display:block;' class='mb-2'>-</h1>
                        <table style="width:100%">
                            <tr>
                                <td>Total pesanan</td>
                                <td id="rincianhargatotal">-</td>
                            </tr>
                            <tr>
                                <td>Biaya Administrasi</td>
                                <td>Rp 5.000,-</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion mb-4" id="accordionExample4">
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color:grey;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Metode Pembayaran
                        </button>
                    </h2>
                </div>

                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample4">
                    <div class="card-body">
                        <div class="row ml-4 mr-4 justify-content-center">
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentbca" value="paymentbca" required />
                                <label for="paymentbca">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/bca.png'); ?>" />
                                    <p class="text-center">Transfer BCA</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentmandiri" value="paymentmandiri" />
                                <label for="paymentmandiri">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/mandiri.png'); ?>" />
                                    <p class="text-center">Transfer Mandiri</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentbni" value="paymentbni" />
                                <label for="paymentbni">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/bni.png'); ?>" />
                                    <p class="text-center">Transfer BNI</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentbri" value="paymentbri" />
                                <label for="paymentbri">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/bri.png'); ?>" />
                                    <p class="text-center">Transfer BRI</p>
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentovo" value="paymentovo" />
                                <label for="paymentovo">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/ovo.png'); ?>" />
                                    <p class="text-center">OVO</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentdana" value="paymentdana" />
                                <label for="paymentdana">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/dana.png'); ?>" />
                                    <p class="text-center">DANA</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentgopay" value="paymentgopay" />
                                <label for="paymentgopay">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/gopay.png'); ?>" />
                                    <p class="text-center">Gopay</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentalfamart" value="paymentalfamart" />
                                <label for="paymentalfamart">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/alfamart.png'); ?>" />
                                    <p class="text-center">Alfamart</p>
                                </label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radiobutton-img" name="payment" id="paymentindomaret" value="paymentindomaret" />
                                <label for="paymentindomaret">
                                    <img height="100px" class="img-radiobutton" src="<?= base_url('/assets/img/payment/indomaret.png'); ?>" />
                                    <p class="text-center">Indomaret</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-secondary float-right mb-auto" value="Bayar">

    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type=radio][name=paket]').change(function() {
            if (this.value == 'paket1') {
                var harga = 2 * <?= $price; ?> + 5000;
            } else if (this.value == 'paket2') {
                var harga = 8 * <?= $price; ?> + 5000;
            } else if (this.value == 'paket3') {
                var harga = 95 * <?= $price; ?> + 5000;
            }
            document.getElementById("hargatotal").innerText = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(harga);
            document.getElementById("rincianhargatotal").innerText = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(harga - 5000);
        });
    });
</script>