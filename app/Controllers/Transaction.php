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
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang Tidak ditemukan');
    }

    public function payment()
    {
        $get = $this->request->getVar();

        $data['post'] = $get;
        $data['title'] = 'Pembayaran';

        dd($data);

        return view('products/subscribe_action', $data);
    }
    //--------------------------------------------------------------------

}
