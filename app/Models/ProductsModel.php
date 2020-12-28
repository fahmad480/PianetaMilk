<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = "product";

    public function getProducts($id = false, $active = true)
    {
        if ($id === false) {
            if ($active) {
                $query = $this->table('product')->where('status', 1)->get();
            } else {
                $query = $this->table('product')->get();
            }


            $i = 0;
            foreach ($query->getResultArray() as $row) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['title'] = $row['title'];
                $data[$i]['image'] = $row['image'];
                $data[$i]['description'] = $row['description'];
                $data[$i]['price'] = $row['price'];
                $data[$i]['stock'] = $row['stock'];
                $data[$i]['status'] = $row['status'];
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
                $data[$i]['status'] = $row['status'];
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

    //-------------------------------[ BAGIAN CRUD PRODUCT ]
    public function insert_product($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
