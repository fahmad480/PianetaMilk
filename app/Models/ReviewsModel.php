<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewsModel extends Model
{
    protected $table = "review";

    public function getReviews($id_product = 1, $stars = 0)
    {
        if ($stars == 0) {
            $query = $this->db->query("SELECT * FROM review WHERE id_product='$id_product'");

            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $query2 = $this->db->query("SELECT * FROM users WHERE id='" . $row['id_user'] . "'")->getFirstRow('array');
                $data[$i]['id'] = $row['id'];
                $data[$i]['member'] = $query2;
                $data[$i]['stars'] = $row['stars'];
                $data[$i]['review'] = $row['review'];
                $i++;
            }
        } else {
            $query = $this->db->query("SELECT * FROM review WHERE id_product='$id_product' AND stars='$stars'");

            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $query2 = $this->db->query("SELECT * FROM users WHERE id='" . $row['id_user'] . "'")->getFirstRow('array');
                $data[$i]['id'] = $row['id'];
                $data[$i]['member'] = $query2;
                $data[$i]['stars'] = $row['stars'];
                $data[$i]['review'] = $row['review'];
                $i++;
            }
        }
        return $data;
    }
}
