<?php
include "models/Product.php";
function listProduct()
{
    $products = getProduct();
    include "views/product/ListProduct.php";
}
function insertProduct()
{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $insertProduct = addProduct($_POST['title'], $_POST['price']);
        header("Location: index.php");
    }
    include "views/product/AddProduct.php";
}

function createProduct($id)
{

    $product = getOneProduct($id);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $updateProduct = updateProduct($id, $_POST['title'], $_POST['price']);
        header("Location: index.php");
    }
    include "views/product/UpdateProduct.php";
}

function removeProduct($id)
{
    $deleteProduct = deleteProduct($id);
    header("Location: index.php");
}
