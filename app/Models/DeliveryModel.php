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
        $this->UsersModel = model('App\Models\UsersModel', false);
    }

    public function getDelivery()
    {
        $query = $this->table($this->table)->get();

        $i = 0;
        foreach ($query->getResultArray() as $row) {
            $trx = $this->TransactionsModel->getTransactions($row['trx'], "id")[0];

            $data[$i]['id'] = $row['id'];
            $data[$i]['trx'] = $trx;
            $data[$i]['date'] = $row['date'];
            $data[$i]['status'] = $row['status'];
            $data[$i]['comment'] = $row['comment'];
            $i++;
        }

        return $data;
    }

    public function getMyDelivery()
    {
        $q = 'SELECT * FROM delivery WHERE trx IN (SELECT id FROM transactions WHERE buyer = \'' . user()->id . '\')';
        $query = $this->db->query($q);

        $i = 0;
        foreach ($query->getResultArray() as $row) {
            $trx = $this->TransactionsModel->getTransactions($row['trx'], "id")[0];

            $data[$i]['id'] = $row['id'];
            $data[$i]['trx'] = $trx;
            $data[$i]['date'] = $row['date'];
            $data[$i]['status'] = $row['status'];
            $data[$i]['comment'] = $row['comment'];
            $i++;
        }

        if (isset($data)) {
            return $data;
        } else {
            return false;
        }
    }

    //----------------------------------------------------------------------
    public function insert_delivery($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_delivery($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_delivery($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
