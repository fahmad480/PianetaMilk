<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PagesModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->pages = new PagesModel();
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
    //--------------------------------------------------------------------
    public function action()
    {
        $get = $this->request->getVar();
        $id = $get['title'];
        $data = [
            'content' => $get['isi']
        ];
        if ($this->pages->updates($data, $id)) {
            return redirect()->to("/admin/$id?success=1");
        }
    }
}
