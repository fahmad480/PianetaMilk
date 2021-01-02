<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewsModel extends Model
{
    protected $table = "review";

    public function getReviews($id_product = 1, $stars = 0)
    {
        if ($stars == 0) {
            $query = $this->db->query("SELECT * FROM review WHERE id_product='$id_product' ORDER BY id DESC");

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
            $query = $this->db->query("SELECT * FROM review WHERE id_product='$id_product' AND stars='$stars' ORDER BY id DESC");

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

    public function checkMyAccount($id_product, $id_buyer)
    {
        $query = $this->db->query("SELECT * FROM " . $this->table . " WHERE id_product='$id_product' AND id_user = '$id_buyer'")->getResultArray();

        return $query;
    }

    public function updateReview($id_product, $stars, $review)
    {
        $id_buyer = user()->id;
        $check = $this->db->query("SELECT * FROM " . $this->table . " WHERE id_product='$id_product' AND id_user = '$id_buyer'");
        // dd(count($check->getResultArray()));
        if (count($check->getResultArray()) >= 1) {
            //update
            $id = $check->getResultArray()[0]['id'];
            $data = [
                'id_user' => $id_buyer,
                'id_product' => $id_product,
                'stars' => $stars,
                'review' => $review
            ];
            return $this->db->table($this->table)->update($data, ['id' => $id]);
        } else {
            //insert
            $data = [
                'id_user' => $id_buyer,
                'id_product' => $id_product,
                'stars' => $stars,
                'review' => $review
            ];
            return $this->db->table($this->table)->insert($data);
        }
    }
}
