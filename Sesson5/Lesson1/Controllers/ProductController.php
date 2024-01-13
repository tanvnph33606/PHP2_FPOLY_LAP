<?php
require_once 'Models/Product.php';

class ProductController
{
    private $prductModel;
    private $categoryModel;

    function __construct()
    {
        $this->prductModel = new Product();
        $this->categoryModel = new Category();
    }
    public function listProduct()
    {
        $products = $this->prductModel->getProduct();

        include 'Views/product/listProduct.php';
    }

    function createProduct()
    {
        $dataCategory = $this->categoryModel->getCategory();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['cate_id'])) {

                $insertProduct = $this->prductModel->addProduct($_POST['title'], $_POST['price'], $_POST['cate_id']);
                header("Location: index.php");
            }
        }
        include "Views/product/AddProduct.php";
    }

    function updateProduct($id)
    {

        $products = $this->prductModel->getOneProduct($id);
        $dataCategory = $this->categoryModel->getCategory();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['cate_id'])) {
                $updateProduct = $this->prductModel->updateProduct($id, $_POST['title'], $_POST['price'], $_POST['cate_id']);
                header("Location: index.php");
            }
        }
        include "Views/product/updateProduct.php";
    }

    function removeProduct($id)
    {
        $deleteProduct = $this->prductModel->deleteProduct($id);
        header("Location: index.php");
    }
}
