<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Transaction extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException();
    }

    public function payment()
    {
        $data['title'] = "Payment";
        $data['post'] = $this->request->getVar();
        $pay = $data['post']['payment'];
        switch ($pay) {
            case "paymentbca":
                $data['payment_content'] = <<<EOF
<img src="base_url('assets/img/payment/bca.png')" height="150px" alt="BCA">
<h3>187651987242</h3>
<h4>Atas Nama : Pianeta Milk</h4>
<h5>Silahkan transfer dengan nominal <b>Rp 500.000,-</b> ke rekening diatas</h5>
<a href="#"><button class="btn btn-primary">Sudah Bayar</button></a>
EOF;
                break;
            case "paymentmandiri":
                echo "Your favorite color is blue!";
                break;
            case "paymentbni":
                echo "Your favorite color is green!";
                break;
            case "paymentbri":
                echo "Your favorite color is green!";
                break;
            case "paymentovo":
                echo "Your favorite color is green!";
                break;
            case "paymentdana":
                echo "Your favorite color is green!";
                break;
            case "paymentgopay":
                echo "Your favorite color is green!";
                break;
            case "paymentalfamart":
                echo "Your favorite color is green!";
                break;
            case "paymentindomaret":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

        return view('products/subscribe_action', $data);
    }
    //--------------------------------------------------------------------

}
