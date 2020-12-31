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

    //----------------------------------------------------------------------
    public function insert_user($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_user($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_user($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
