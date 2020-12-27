<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['title'] = "Admin Panel";
        $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
        $data['custom_js'] = '<script src="' . base_url('/assets/js/admin.js') . '"></script>';
        // echo view('admin/layout/header', $data);
        echo view('admin/index', $data);
        // echo view('admin/layout/footer', $data);
    }

    // public function aboutus()
    // {
    //     $data['title'] = "Admin Panel - About Us";
    //     $data['custom_css'] = '<link rel="stylesheet" href="' . base_url('/assets/css/style-admin.css') . '">';
    //     echo view('admin/layout/header', $data);
    //     echo view('admin/pages/aboutus', $data);
    //     echo view('admin/layout/footer', $data);
    // }
    //--------------------------------------------------------------------

}
