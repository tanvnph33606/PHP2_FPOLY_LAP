<?php
require_once 'Controllers/ProductController.php';
require_once 'Controllers/CategoryController.php';

$url = isset($_GET['url']) ? $_GET['url'] : "/";
$id = isset($_GET['id']) ? $_GET['id'] : '';

// echo $url;

switch ($url) {
        // Product
    case '/':
        $productController = new ProductController();
        $productController->listProduct();
        break;
    case 'add-product':
        $productController = new ProductController();
        $productController->createProduct();
        break;
    case 'update-product':
        $productController = new ProductController();
        $productController->updateProduct($id);
        break;
    case 'delete-product':
        $productController = new ProductController();
        $productController->removeProduct($id);
        break;

        //Category
    case 'list-category':
        $categoryController = new CategoryController();
        $categoryController->listCategory();
        break;
    case 'add-category':
        $categoryController = new CategoryController();
        $categoryController->createCategory();
        break;
    case 'update-category':
        $categoryController = new CategoryController();
        $categoryController->updateCategory($id);
        break;
    case 'delete-category':
        $categoryController = new CategoryController();
        $categoryController->removeCategory($id);
        break;

    default:
        # code...
        break;
}
