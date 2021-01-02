<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductsModel;
use App\Models\TransactionsModel;

class Transaction extends BaseController
{
    public function __construct()
    {
        $this->products = new ProductsModel();
        $this->transaction = new TransactionsModel();
    }

    public function index()
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException();
    }

    public function payment()
    {
        $data['title'] = "Payment";
        $data['post'] = $this->request->getVar();
        $data['product'] = $this->products->getProducts($data['post']['product_id'])[0];
        $pay = $data['post']['payment'];

        switch ($data['post']['jadwal']) {
            case "jadwal1":
                $jadwal = "Senin dan Kamis";
                break;
            case "jadwal2":
                $jadwal = "Selasa dan Jum'at";
                break;
            case "jadwal3";
                $jadwal = "Rabu dan Sabtu";
                break;
        }

        switch ($data['post']['paket']) {
            case "paket1":
                $paket = 2;
                $hari = 7;
                break;
            case "paket2":
                $paket = 8;
                $hari = 31;
                break;
            case "paket3";
                $paket = 95;
                $hari = 365;
                break;
        }

        $bayar = number_format($data['product']['price'] * $paket);
        $url_bayar = base_url("transaction/paid?product_id=" . $data['post']['product_id'] . "&paket=" . $data['post']['paket'] . "&jadwal=" . $data['post']['jadwal'] . "&metode=" . str_replace('payment', '', $data['post']['payment']));
        $url_reject = base_url('transaction/reject');

        // dd($data);

        $d = [
            'buyer' => user()->toArray()['id'],
            'product' => $data['post']['product_id'],
            'jadwal' => $data['post']['jadwal'],
            'paket' => $data['post']['paket'],
            'price' => $data['product']['price'] * $paket,
            'payment' => str_replace('payment', '', $data['post']['payment']),
            'date' => date('Y-m-d'),
            'expired_date' => date('Y-m-d', strtotime(date('Y-m-d') . ' + ' . $hari . ' days')),
            'status' => 'belum lunas',
        ];

        if ($this->transaction->getActiveOrNotSubscribtion() >= 1) {
            return redirect()->to(base_url('info?id=3'));
        } else {
            $this->transaction->insert_transaction($d);
        }

        switch ($pay) {
            case "paymentbca":
                $norek = 8671299837; //rand(111111111, 999999999);
                $payment = base_url('assets/img/payment/bca.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="BCA">
<h3>$norek</h3>
<h4>Atas Nama : Pianeta Milk</h4>
<h5 class="mb-4">Silahkan transfer dengan nominal <b>Rp $bayar.-</b> ke rekening diatas</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentmandiri":
                $norek = 13099920491234; //rand(111111111, 999999999);
                $payment = base_url('assets/img/payment/mandiri.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="Mandiri">
<h3>$norek</h3>
<h4>Atas Nama : Pianeta Milk</h4>
<h5 class="mb-4">Silahkan transfer dengan nominal <b>Rp $bayar.-</b> ke rekening diatas</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentbni":
                $norek = 51235123123; //rand(111111111, 999999999);
                $payment = base_url('assets/img/payment/bni.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="BNI">
<h3>$norek</h3>
<h4>Atas Nama : Pianeta Milk</h4>
<h5 class="mb-4">Silahkan transfer dengan nominal <b>Rp $bayar.-</b> ke rekening diatas</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentbri":
                $norek = 125131231; //rand(111111111, 999999999);
                $payment = base_url('assets/img/payment/bri.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="BRI">
<h3>$norek</h3>
<h4>Atas Nama : Pianeta Milk</h4>
<h5 class="mb-4">Silahkan transfer dengan nominal <b>Rp $bayar.-</b> ke rekening diatas</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentovo":
                $payment = base_url('assets/img/payment/example/ovoqr.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="OVO">
<h5 class="mb-4">Silahkan Scan QR Code diatas menggunakan aplikasi OVO atau eWallet yang mendukung QRIS (<b>Rp $bayar.-</b>)</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentdana":
                $payment = base_url('assets/img/payment/example/danaqr.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="DANA">
<h5 class="mb-4">Silahkan Scan QR Code diatas menggunakan aplikasi DANA atau eWallet yang mendukung QRIS (<b>Rp $bayar.-</b>)</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentgopay":
                $payment = base_url('assets/img/payment/example/gopayqr.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="GoPay">
<h5 class="mb-4">Silahkan Scan QR Code diatas menggunakan aplikasi GoJek atau eWallet yang mendukung QRIS (<b>Rp $bayar.-</b>)</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentalfamart":
                $norek = 1645654856745631; //rand(111111111, 999999999);
                $payment = base_url('assets/img/payment/alfamart.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="Alfamart">
<h3>$norek</h3>
<h5 class="mb-4">Silahkan lakukan pembayaran sebesar <b>Rp $bayar.-</b> melalui kasir Alfamart</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            case "paymentindomaret":
                $norek = 7687602342362523; //rand(111111111, 999999999);
                $payment = base_url('assets/img/payment/indomaret.png');
                $data['payment_content'] = <<<EOF
<img src="$payment" height="150px" alt="Indomaret">
<h3>$norek</h3>
<h5 class="mb-4">Silahkan lakukan pembayaran sebesar <b>Rp $bayar.-</b> melalui kasir Indomaret</h5>
<a href="$url_bayar"><button class="btn btn-primary">Sudah Bayar</button></a> <a href="$url_reject"><button class="btn btn-danger">Batalkan Transaksi</button></a>
EOF;
                break;
            default:
                echo "ERROR";
        }

        return view('products/subscribe_action', $data);
    }

    public function payment_paid()
    {
        $get = $this->request->getVar();

        $data = [
            // 'buyer' => user()->toArray()['id'],
            // 'product' => $get['product_id'],
            // 'jadwal' => $get['jadwal'],
            // 'paket' => $get['paket'],
            // 'price' => 1,
            // 'payment' => $get['metode'],
            // 'date' => date('Y-m-d'),
            'status' => 'lunas'
        ];

        if ($this->transaction->update_transaction($data, ['buyer' => user()->toArray()['id'], 'status' => 'belum lunas', 'date' => date("Y-m-d")])) {
            return redirect()->to(base_url('info?id=1'));
        }
    }

    public function payment_reject()
    {
        $get = $this->request->getVar();

        $data = [
            // 'buyer' => user()->toArray()['id'],
            // 'product' => $get['product_id'],
            // 'jadwal' => $get['jadwal'],
            // 'paket' => $get['paket'],
            // 'price' => 1,
            // 'payment' => $get['metode'],
            // 'date' => date('Y-m-d'),
            'status' => 'batal'
        ];

        if ($this->transaction->update_transaction($data, ['buyer' => user()->toArray()['id'], 'status' => 'belum lunas', 'date' => date("Y-m-d")])) {
            return redirect()->to(base_url('info?id=2'));
        }
    }
    //--------------------------------------------------------------------

}
