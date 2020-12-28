<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
    protected $table = "transactions";

    public function __construct()
    {
        parent::__construct();

        $this->ProductsModel = model('App\Models\ProductsModel', false);
        $this->UserModel = model('App\Models\UserModel', false);
    }

    public function getTransactions()
    {
        $query = $this->table($this->table)->get();

        $i = 0;
        foreach ($query->getResultArray() as $row) {
            $data[$i]['id'] = $row['id'];
            $data[$i]['buyer'] = $this->UserModel->getUsers($row['buyer']);
            $data[$i]['product'] = $this->ProductsModel->getProducts($row['product'])[0];
            $data[$i]['price'] = $row['price'];
            $data[$i]['date'] = $row['date'];
            $data[$i]['status'] = $row['status'];
            $i++;
        }

        // dd($data);

        return $data;
    }

    //----------------------------------------------------------------------
    public function insert_transaction($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_transaction($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_transaction($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
