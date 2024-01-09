<?php
require "db.php";
function getProduct()
{
    $sql = "SELECT * FROM product";
    return getData($sql);
}

function getOneProduct($id)
{
    $sql = "SELECT * FROM product WHERE id = $id";
    return getData($sql, false);
}

function addProduct($name, $price)
{
    $sql = "INSERT INTO product(title, price) values ('$name', '$price')";
    return getData($sql, false);
}

function updateProduct($id, $name, $price)
{
    $sql = "UPDATE product SET title = '$name', price = '$price' WHERE id = $id";
    return getData($sql, false);
}

function deleteProduct($id)
{
    $sql = "DELETE FROM product WHERE id = $id";
    return getData($sql, false);
}
