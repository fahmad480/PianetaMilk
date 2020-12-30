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

    public function getTransactions($id = false)
    {
        if ($id) {
            $query = $this->table($this->table)->where('id', $id)->get();

            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['buyer'] = $this->UserModel->getUsers($row['buyer']);
                $data[$i]['product'] = $this->ProductsModel->getProducts($row['product'])[0];
                $data[$i]['price'] = $row['price'];
                $data[$i]['date'] = $row['date'];
                $data[$i]['expired_date'] = $row['expired_date'];
                $data[$i]['status'] = $row['status'];
                $data[$i]['jadwal'] = $row['jadwal'];
                $data[$i]['paket'] = $row['paket'];
                $data[$i]['payment'] = $row['payment'];
                $i++;
            }
        } else {
            $q = 'SELECT *, IF(DATE(expired_date) >= \'' . date("Y-m-d") . '\', \'Aktif\', \'Kadaluarsa\') AS status_exp FROM transactions';
            $query = $this->db->query($q);

            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['buyer'] = $this->UserModel->getUsers($row['buyer']);
                $data[$i]['product'] = $this->ProductsModel->getProducts($row['product'])[0];
                $data[$i]['price'] = $row['price'];
                $data[$i]['date'] = $row['date'];
                $data[$i]['expired_date'] = $row['expired_date'];
                $data[$i]['status'] = $row['status'];
                $data[$i]['status_exp'] = $row['status_exp'];
                $data[$i]['jadwal'] = $row['jadwal'];
                $data[$i]['paket'] = $row['paket'];
                $data[$i]['payment'] = $row['payment'];
                $i++;
            }
        }

        return $data;
    }

    public function getActiveTransactions()
    {
        $q = "SELECT * FROM " . $this->table . " WHERE DATE(expired_date) >= '" . date('Y-m-d') . "'";
        $query = $this->db->query($q);

        $i = 0;
        foreach ($query->getResultArray() as $row) {
            $data[$i]['id'] = $row['id'];
            $data[$i]['buyer'] = $this->UserModel->getUsers($row['buyer']);
            $data[$i]['product'] = $this->ProductsModel->getProducts($row['product'])[0];
            $data[$i]['price'] = $row['price'];
            $data[$i]['date'] = $row['date'];
            $data[$i]['expired_date'] = $row['expired_date'];
            $data[$i]['status'] = $row['status'];
            $data[$i]['jadwal'] = $row['jadwal'];
            $data[$i]['paket'] = $row['paket'];
            $data[$i]['payment'] = $row['payment'];
            $i++;
        }
        if (isset($data)) {
            return $data;
        } else {
            return false;
        }
    }

    public function getActiveOrNotSubscribtion()
    {
        $q = "SELECT * FROM " . $this->table . " WHERE DATE(expired_date) >= '" . date('Y-m-d') . "' AND buyer = '" . user()->toArray()['id'] . "'";
        $query = $this->db->query($q)->getFieldCount();

        return $query;
    }

    public function getChartTransactions()
    {
        //SELECT date,SUM(price) AS total FROM transactions WHERE status = 'lunas' GROUP BY date ORDER BY CAST(date as date) ASC LIMIT 10
        $q = "SELECT date,SUM(price) AS total FROM " . $this->table . " WHERE status = 'lunas' GROUP BY date ORDER BY CAST(date as date) ASC LIMIT 10";
        $query = $this->db->query($q)->getResultArray();


        if (isset($query)) {
            return $query;
        } else {
            return false;
        }
    }

    //----------------------------------------------------------------------
    public function insert_transaction($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_transaction($data, $where)
    {
        return $this->db->table($this->table)->update($data, $where);
    }

    public function delete_transaction($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
