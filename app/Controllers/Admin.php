<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PagesModel;
use App\Models\TransactionsModel;
use App\Models\ProductsModel;
use App\Models\DeliveryModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->pages = new PagesModel();
        $this->transactions = new TransactionsModel();
        $this->products = new ProductsModel();
        $this->delivery = new DeliveryModel();
    }

    public function index()
    {
        $data['title'] = "Admin Panel";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['custom_js'] = '<script src="' . base_url('/assets/js/admin.js') . '"></script>';
        echo view('admin/layout/header', $data);
        echo view('admin/index', $data);
        echo view('admin/layout/footer', $data);
    }

    public function aboutus()
    {
        $data['title'] = "Admin Panel - About Us";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("aboutus")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/aboutus', $data);
        echo view('admin/layout/footer', $data);
    }

    public function business()
    {
        $data['title'] = "Admin Panel - Business";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("business")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/business', $data);
        echo view('admin/layout/footer', $data);
    }

    public function commitment()
    {
        $data['title'] = "Admin Panel - Commitment";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("commitment")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/commitment', $data);
        echo view('admin/layout/footer', $data);
    }

    public function contactus()
    {
        $data['title'] = "Admin Panel - Contact Us";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("contactus")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/contactus', $data);
        echo view('admin/layout/footer', $data);
    }

    public function cows()
    {
        $data['title'] = "Admin Panel - Cows";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("cows")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/cows', $data);
        echo view('admin/layout/footer', $data);
    }

    public function history()
    {
        $data['title'] = "Admin Panel - History";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("history")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/history', $data);
        echo view('admin/layout/footer', $data);
    }

    public function ourfarm()
    {
        $data['title'] = "Admin Panel - Our Farm";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("ourfarm")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/ourfarm', $data);
        echo view('admin/layout/footer', $data);
    }

    public function philosophy()
    {
        $data['title'] = "Admin Panel - Philosophy";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("philosophy")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/philosophy', $data);
        echo view('admin/layout/footer', $data);
    }

    public function subscribe()
    {
        $data['title'] = "Admin Panel - Subscribe";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['value'] = $this->pages->getPages("subscribe")['content'];
        echo view('admin/layout/header', $data);
        echo view('admin/pages/subscribe', $data);
        echo view('admin/layout/footer', $data);
    }
    public function products()
    {
        $data['title'] = "Admin Panel - Daftar Produk";
        $data['products'] = $this->products->getProducts(false, false);
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        echo view('admin/layout/header', $data);
        echo view('admin/product', $data);
        echo view('admin/layout/footer', $data);
    }

    public function product_add()
    {
        $data['title'] = "Admin Panel - Tambah Produk";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        echo view('admin/layout/header', $data);
        echo view('admin/crud/product_add', $data);
        echo view('admin/layout/footer', $data);
    }

    public function product_edit()
    {
        $data['product'] = $this->products->getProducts($this->request->getGet('id'))[0];
        $data['title'] = "Admin Panel - Edit Produk";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        // dd($data);
        echo view('admin/layout/header', $data);
        echo view('admin/crud/product_edit', $data);
        echo view('admin/layout/footer', $data);
    }

    public function product_save()
    {
        $post = $this->request->getPost();

        $data = [
            'title' => $post['nama'],
            'description' => $post['deskripsi'],
            'price' => $post['harga'],
            'stock' => $post['stok'],
            'status' => 1,
            'image' => '/assets/img/product-example.jpg'
        ];

        if ($this->products->insert_product($data)) {
            return redirect()->to(base_url('/admin/products?status=success&message=Produk+Berhasil+ditambah'));
        }
    }

    public function product_update()
    {
        $post = $this->request->getPost();
        $get = $this->request->getGet();

        $data = [
            'title' => $post['nama'],
            'description' => $post['deskripsi'],
            'price' => $post['harga'],
            'stock' => $post['stok'],
            'status' => 1
        ];

        if ($this->products->update_product($data, $get['id'])) {
            return redirect()->to(base_url('/admin/products?status=success&message=Produk+Berhasil+diperbaharui'));
        }
    }

    public function product_disable()
    {
        $get = $this->request->getGet();

        $data = [
            'status' => 0
        ];

        if ($this->products->update_product($data, $get['id'])) {
            return redirect()->to(base_url('/admin/products?status=success&message=Produk+Berhasil+dinonaktifkan'));
        }
    }

    public function product_enable()
    {
        $get = $this->request->getGet();

        $data = [
            'status' => 1
        ];

        if ($this->products->update_product($data, $get['id'])) {
            return redirect()->to(base_url('/admin/products?status=success&message=Produk+Berhasil+diaktifkan+kembali'));
        }
    }

    public function transactions()
    {
        $data['title'] = "Admin Panel - Daftar Transaksi";
        $data['transactions'] = $this->transactions->getTransactions();
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        echo view('admin/layout/header', $data);
        echo view('admin/transactions', $data);
        echo view('admin/layout/footer', $data);
    }

    public function transaction_lunas()
    {
        $get = $this->request->getGet();

        $data = [
            'status' => 'lunas'
        ];

        if ($this->transactions->update_transaction($data, $get['id'])) {
            return redirect()->to(base_url('/admin/transactions?status=success&message=Transaksi+Berhasil+Dilunaskan'));
        }
    }

    public function transaction_batal()
    {
        $get = $this->request->getGet();

        $data = [
            'status' => 'batal'
        ];

        if ($this->transactions->update_transaction($data, $get['id'])) {
            return redirect()->to(base_url('/admin/transactions?status=success&message=Transaksi+Berhasil+Dibatalkan'));
        }
    }

    public function transaction_refund()
    {
        $get = $this->request->getGet();

        $data = [
            'status' => 'refund'
        ];

        if ($this->transactions->update_transaction($data, $get['id'])) {
            return redirect()->to(base_url('/admin/transactions?status=success&message=Transaksi+Berhasil+Direfund'));
        }
    }

    public function delivery()
    {
        $data['title'] = "Admin Panel - Daftar Pengantaran";
        $data['delivery'] = $this->delivery->getDelivery();
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        echo view('admin/layout/header', $data);
        echo view('admin/delivery', $data);
        echo view('admin/layout/footer', $data);
    }

    public function delivery_edit()
    {
        $data['delivery'] = $this->delivery->getDelivery($this->request->getGet('id'))[0];
        $data['title'] = "Admin Panel - Edit Pengantaran";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        // dd($data);
        echo view('admin/layout/header', $data);
        echo view('admin/crud/delivery_edit', $data);
        echo view('admin/layout/footer', $data);
    }

    //--------------------------------------------------------------------
    public function action()
    {
        $get = $this->request->getVar();
        $id = $get['title'];
        $data = [
            'content' => htmlentities($get['isi'])
        ];
        if ($this->pages->updates($data, $id)) {
            return redirect()->to("/admin/$id?success=1");
        }
    }
}
