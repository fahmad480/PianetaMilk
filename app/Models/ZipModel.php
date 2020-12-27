<?php

namespace App\Models;

use CodeIgniter\Model;

class ZipModel extends Model
{
    protected $table = "zip";

    public function getZip($id = false)
    {
        if ($id === false) {
            return false;
        } else {
            $return = $this->table('zip')->where('zip', $id)->get()->getRowArray();
            if (isset($return['zip'])) {
                return true;
            } else {
                return false;
            }
        }
    }
}
