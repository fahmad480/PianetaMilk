<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $table = "carousel";

    public function getCarousel()
    {
        return $this->table('carousel')
            ->get()
            ->getResultArray();
    }
}
