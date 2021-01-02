<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PagesModel;
use App\Models\TransactionsModel;
use App\Models\ProductsModel;
use App\Models\DeliveryModel;
use App\Models\CarouselModel;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->pages = new PagesModel();
        $this->transactions = new TransactionsModel();
        $this->products = new ProductsModel();
        $this->delivery = new DeliveryModel();
        $this->carousel = new CarouselModel();
    }

    public function index()
    {
        $chart = $this->transactions->getChartTransactions();
        $labels = [];
        $data = [];
        foreach ($chart as $key => $row) {
            array_push($labels, $row['date']);
            array_push($data, $row['total']);
        }
        $l = json_encode($labels);
        $d = json_encode($data);


        $j1 = <<<EOF
/* globals Chart:false, feather:false */

(function () {
  "use strict";

  feather.replace();

  // Graphs
  var ctx = document.getElementById("myChart");
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: $l,
      datasets: [
        {
          data: $d,
          lineTension: 0,
          backgroundColor: "transparent",
          borderColor: "#007bff",
          borderWidth: 4,
          pointBackgroundColor: "#007bff",
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: false,
            },
          },
        ],
      },
      legend: {
        display: false,
      },
    },
  });
})();
EOF;

        $data['title'] = "Admin Panel";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['custom_js'] = "\r\n<script>\r\n$j1\r\n</script>\r\n";
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
        $get = $this->request->getGet();

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('/admin/products?status=danger&message=Produk+Gagal+ditambah'));
        }

        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);

        if ($validated == FALSE) {

            // Kembali ke function index supaya membawa data uploads dan validasi
            return redirect()->to(base_url('/admin/products?status=danger&message=Produk+Gagal+ditambah'));
        } else {

            $avatar = $this->request->getFile('foto');
            $avatar->move(ROOTPATH . 'public/assets/img/product/upload/new/');

            $data = [
                'title' => $post['nama'],
                'description' => $post['deskripsi'],
                'price' => $post['harga'],
                'stock' => $post['stok'],
                'status' => 1,
                'image' => '/assets/img/product/upload/new/' . $avatar->getName()
            ];

            if ($this->products->insert_product($data)) {
                return redirect()->to(base_url('/admin/products?status=success&message=Produk+Berhasil+ditambah'));
            } else {
                return redirect()->to(base_url('/admin/products?status=danger&message=Produk+Gagal+ditambah'));
            }
        }
    }

    public function product_update()
    {
        $post = $this->request->getPost();
        $get = $this->request->getGet();

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('/admin/products?status=danger&message=Produk+Gagal+diperbaharui'));
        }

        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);

        if ($validated == FALSE) {
            $data = [
                'title' => $post['nama'],
                'description' => $post['deskripsi'],
                'price' => $post['harga'],
                'stock' => $post['stok'],
                'status' => 1
            ];
        } else {

            $avatar = $this->request->getFile('foto');
            $avatar->move(ROOTPATH . 'public/assets/img/product/upload/' . $get['id'] . '/');

            $data = [
                'title' => $post['nama'],
                'description' => $post['deskripsi'],
                'price' => $post['harga'],
                'stock' => $post['stok'],
                'status' => 1,
                'image' => '/assets/img/product/upload/' . $get['id'] . '/' . $avatar->getName()
            ];
        }

        if ($this->products->update_product($data, $get['id'])) {
            return redirect()->to(base_url('/admin/products?status=success&message=Produk+Berhasil+diperbaharui'));
        } else {
            return redirect()->to(base_url('/admin/products?status=danger&message=Produk+Gagal+diperbaharui'));
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
        // dd($data['transactions']);
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
        // dd($data);
        echo view('admin/layout/header', $data);
        echo view('admin/delivery', $data);
        echo view('admin/layout/footer', $data);
    }

    public function delivery_add()
    {
        $data['trx_list'] = $this->transactions->getActiveTransactions();
        $data['title'] = "Admin Panel - Tambah Pengantaran";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        // dd($data);
        echo view('admin/layout/header', $data);
        echo view('admin/crud/delivery_add', $data);
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

    public function delivery_insert()
    {
        $post = $this->request->getPost();

        $data = [
            'trx' => $post['trx'],
            'date' => $post['date'],
            'status' => $post['status'],
            'comment' => $post['comment']
        ];

        if ($this->delivery->insert_delivery($data)) {
            return redirect()->to(base_url('admin/delivery?status=success&message=Pengantaran+Berhasil+ditambah'));
        }
    }

    public function delivery_update()
    {
        $post = $this->request->getPost();
        $get = $this->request->getGet();

        $data = [
            'date' => $post['date'],
            'status' => $post['status'],
            'comment' => $post['comment']
        ];

        if ($this->delivery->update_delivery($data, $get['id'])) {
            return redirect()->to(base_url('admin/delivery?status=success&message=Pengantaran+Berhasil+diperbaharui'));
        }
    }

    public function delivery_delete()
    {
        $get = $this->request->getGet();

        if ($this->delivery->delete_delivery($get['id'])) {
            return redirect()->to(base_url('admin/delivery?status=success&message=Pengantaran+Berhasil+dihapus'));
        }
    }

    public function carousel()
    {
        $data['title'] = "Admin Panel - Data Gambar Carousel";
        $data['carousel'] = $this->carousel->getCarousel();
        echo view('admin/layout/header', $data);
        echo view('admin/carousel', $data);
        echo view('admin/layout/footer', $data);
    }

    public function carousel_add()
    {
        $data['title'] = "Admin Panel - Edit Carousel";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        echo view('admin/layout/header', $data);
        echo view('admin/crud/carousel_add', $data);
        echo view('admin/layout/footer', $data);
    }

    public function carousel_edit()
    {
        $data['carousel'] = $this->carousel->getCarousel($this->request->getGet('id'))[0];
        $data['title'] = "Admin Panel - Edit Carousel";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        // dd($data);
        echo view('admin/layout/header', $data);
        echo view('admin/crud/carousel_edit', $data);
        echo view('admin/layout/footer', $data);
    }

    public function carousel_delete()
    {
        $get = $this->request->getGet();

        if ($this->carousel->delete_carousel($get['id'])) {
            return redirect()->to(base_url('admin/carousel?status=success&message=Carousel+Berhasil+dihapus'));
        }
    }

    public function carousel_insert()
    {
        $post = $this->request->getPost();
        $get = $this->request->getGet();

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('admin/carousel?status=danger&message=Carousel+gagal+ditambah'));
        }

        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);

        if ($validated == FALSE) {

            // Kembali ke function index supaya membawa data uploads dan validasi
            return redirect()->to(base_url('admin/carousel?status=danger&message=Carousel+gagal+ditambah'));
        } else {

            $avatar = $this->request->getFile('foto');
            $avatar->move(ROOTPATH . 'public/assets/img/carousel/upload/');

            $data = [
                'title' => $post['judul'],
                'description' => $post['deskripsi'],
                'image_url' => '/assets/img/carousel/upload/' . $avatar->getName()
            ];

            if ($this->carousel->insert_carousel($data)) {
                return redirect()->to(base_url('admin/carousel?status=success&message=Carousel+Berhasil+ditambah'));
            } else {
                return redirect()->to(base_url('admin/carousel?status=danger&message=Carousel+gagal+ditambah'));
            }
        }
    }

    public function carousel_update()
    {
        $post = $this->request->getPost();
        $get = $this->request->getGet();

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('admin/carousel?status=danger&message=Carousel+gagal+diperbaharui'));
        }

        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);

        if ($validated == FALSE) {
            $data = [
                'title' => $post['judul'],
                'description' => $post['deskripsi']
            ];
        } else {

            $avatar = $this->request->getFile('foto');
            $avatar->move(ROOTPATH . 'public/assets/img/carousel/upload/');

            $data = [
                'title' => $post['judul'],
                'description' => $post['deskripsi'],
                'image_url' => '/assets/img/carousel/upload/' . $avatar->getName()
            ];
        }

        if ($this->carousel->update_carousel($data, $get['id'])) {
            return redirect()->to(base_url('admin/carousel?status=success&message=Carousel+Berhasil+diperbaharui'));
        } else {
            return redirect()->to(base_url('admin/carousel?status=danger&message=Carousel+gagal+diperbaharui'));
        }
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
