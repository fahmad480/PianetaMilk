<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $table = "carousel";

    public function getCarousel($id = false)
    {
        if ($id) {
            return $this->table('carousel')
                ->where('id', $id)
                ->get()
                ->getResultArray();
        } else {
            return $this->table('carousel')
                ->get()
                ->getResultArray();
        }
    }

    //----------------------------------------------------------------------

    public function insert_carousel($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_carousel($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_carousel($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
