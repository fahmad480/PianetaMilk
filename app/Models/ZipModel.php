<?php

namespace App\Models;

use CodeIgniter\Model;

class ZipModel extends Model
{
    protected $table = "zip";

    public function getZip($id = false)
    {
        if ($id === false) {
            return $this->table($this->table)->get()->getResultArray();
        } else {
            $return = $this->table($this->table)->where('zip', $id)->get()->getRowArray();
            if (isset($return['zip'])) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getValueZip($id = false)
    {
        if ($id) {
            return $this->table($this->table)->where('zip', $id)->get()->getRowArray();
        }
    }

    //------------------------------------------------------------------------------------
    public function insert_zip($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_zip($data, $where)
    {
        return $this->db->table($this->table)->update($data, ['zip' => $where]);
    }

    public function delete_zip($id)
    {
        return $this->db->table($this->table)->delete(['zip' => $id]);
    }
}
