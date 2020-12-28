<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
    protected $table = "transactions";

    public function getTransactions()
    {
        return $this->table($this->table)
            ->get()
            ->getResultArray();
    }
}
