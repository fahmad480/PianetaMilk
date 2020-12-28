<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";

    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->table($this->table)->get()->getResultArray();
        } else {
            return $this->table($this->table)->where('id', $id)->get()->getRowArray();
        }
    }
}
