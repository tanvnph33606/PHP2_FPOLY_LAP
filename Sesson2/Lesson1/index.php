<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
$id = isset($_GET['id']) ? $_GET['id'] : '';

// echo $url;

switch ($url) {
    case '/':
        listProduct();
        break;
    case 'add-product':
        insertProduct();

        break;
    case 'update-product':
        createProduct($id);
        break;
    case 'delete-product':
        removeProduct($id);
        break;

    default:
        # code...
        break;
}
