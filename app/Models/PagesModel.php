<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table = "pages";
    protected $primaryKey = 'id';

    public function getPages($title)
    {
        return $this->table("pages")
            ->where('id', $title)
            ->get()->getResultArray()[0];
    }

    public function updates($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
}
