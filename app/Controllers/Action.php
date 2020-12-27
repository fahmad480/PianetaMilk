<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ZipModel;
use App\Models\ReviewsModel;

class Action extends BaseController
{
    public function __construct()
    {
        $this->zip = new ZipModel();
        $this->reviews = new ReviewsModel();
    }

    public function index()
    {
        echo 'tes';
    }

    public function cek_zip()
    {
        $zip = $this->request->getPost('zip');
        $result = $this->zip->getZip($zip);

        if ($result) {
            echo "Selamat, kode pos $zip terjangkau oleh " . getenv('app.name');
        } else {
            echo "Maaf, kode pos $zip tidak terjangkau oleh " . getenv('app.name');
        }
    }

    public function get_review()
    {
        $id_product = $this->request->getPost('id_product');
        $stars = $this->request->getPost('stars');
        $result = $this->reviews->getReviews($id_product, $stars);
        foreach ($result as $key => $row) :
            $img = base_url($row['member']['profile_pict']);
            $name = $row['member']['full_name'];
            $review = $row['review'];
            echo <<<EOF
            <div class="media text-muted pt-3">
                <img class="mr-2" width="55" height="55" style="object-fit: cover; border-radius: 50%;" src="$img" alt="profile">
                <div class="media-body pb-3 mb-0">
                    <div>
                        <strong class="text-gray-dark">$name</strong><br>
            EOF;
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= round($row['stars'])) {
                    echo '<i class="fa fa-star"></i>';
                } else {
                    echo '<i class="fa fa-star-o"></i>';
                }
            }
            echo <<<EOF
                    </div>
                    <p class="d-block">$review</p>
                </div>
            </div>
            <hr>
            EOF;
        endforeach;

        // echo $id_product . " | " . $stars;
    }
    //--------------------------------------------------------------------

}
