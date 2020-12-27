<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = "product";

    public function getProducts($id = false)
    {
        if ($id === false) {
            $query = $this->table('product')->get();

            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['title'] = $row['title'];
                $data[$i]['image'] = $row['image'];
                $data[$i]['description'] = $row['description'];
                $data[$i]['price'] = $row['price'];
                $data[$i]['stock'] = $row['stock'];
                $data[$i]['review'] = $this->getStars($row['id']);
                $i++;
            }
        } else {
            $query = $this->table('product')
                ->where('id', $id)
                ->get();

            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['title'] = $row['title'];
                $data[$i]['image'] = $row['image'];
                $data[$i]['description'] = $row['description'];
                $data[$i]['price'] = $row['price'];
                $data[$i]['stock'] = $row['stock'];
                $data[$i]['review'] = $this->getStars($row['id']);
                $i++;
            }
        }

        // dd($data);

        if (empty($data[0]['title']) && $id != false) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang Tidak ditemukan');
        }

        return $data;
    }

    public function getStars($id)
    {
        $return = $this->db->query("SELECT AVG(stars)AS 'stars', COUNT(stars) as counts FROM review WHERE id_product='$id'");
        $result['stars'] = $return->getRow()->stars;
        $result['count'] = $return->getRow()->counts;
        return $result;
    }

    public function getAllReview($id_product)
    {
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
        return $data;
    }
}
