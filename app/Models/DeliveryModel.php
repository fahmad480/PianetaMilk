<?php

namespace App\Models;

use CodeIgniter\Model;

class DeliveryModel extends Model
{
    protected $table = "delivery";

    public function __construct()
    {
        parent::__construct();

        $this->TransactionsModel = model('App\Models\TransactionsModel', false);
        $this->ProductsModel = model('App\Models\ProductsModel', false);
        $this->UserModel = model('App\Models\UserModel', false);
    }

    public function getDelivery()
    {
        $query = $this->table($this->table)->get();

        $i = 0;
        foreach ($query->getResultArray() as $row) {
            $trx = $this->TransactionsModel->getTransactions($row['trx'])[0];

            $data[$i]['id'] = $row['id'];
            $data[$i]['trx'] = $trx;
            $data[$i]['date'] = $row['date'];
            $data[$i]['status'] = $row['status'];
            $data[$i]['comment'] = $row['comment'];
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
