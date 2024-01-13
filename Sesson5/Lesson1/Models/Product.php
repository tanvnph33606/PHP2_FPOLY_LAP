<?php
require_once 'Models/DB.php';
class Product extends DB
{

    function getProduct()
    {
        $sql = "SELECT p.id AS pro_id, p.title, p.price, c.* FROM product p JOIN category c ON p.cate_id = c.id";
        return $this->getData($sql);
    }

    function getOneProduct($id)
    {
        $sql = "SELECT * FROM product WHERE id = $id";

        return $this->getData($sql, false);
    }

    function addProduct($name, $price, $cate_id)
    {
        $sql = "INSERT INTO product(title, price, cate_id) values ('$name', '$price', '$cate_id')";
        return $this->getData($sql, false);
    }

    function updateProduct($id, $name, $price, $cate_id)
    {
        $sql = "UPDATE product SET title = '$name', price = '$price', cate_id = '$cate_id' WHERE id = $id";
        return $this->getData($sql, false);
    }

    function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id = $id";
        return $this->getData($sql, false);
    }

    function deleteProductByCate($cate_id)
    {
        $sql = "DELETE FROM product WHERE cate_id = $cate_id";
        return $this->getData($sql, false);
    }
}
