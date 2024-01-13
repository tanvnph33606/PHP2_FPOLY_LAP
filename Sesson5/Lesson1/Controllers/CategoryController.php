<?php
require_once 'Models/Category.php';
class CategoryController
{
    private $categoryModel;
    private $productModel;
    function __construct()
    {
        $this->categoryModel = new Category();
        $this->productModel = new Product();
    }
    public function listCategory()
    {
        $dataCategory = $this->categoryModel->getCategory();
        include 'Views/category/listCategory.php';
    }

    function createCategory()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_POST['name']) && !empty($_POST['description'])) {
                $insertCategory = $this->categoryModel->addCategory($_POST['name'], $_POST['description']);
                header("Location: index.php?url=list-category");
            }
        }
        include "Views/category/AddCategory.php";
    }

    function updateCategory($id)
    {

        $dataCategory = $this->categoryModel->getOneCategory($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_POST['name']) && !empty($_POST['description'])) {
                $updateCategory = $this->categoryModel->updateCategory($id, $_POST['name'], $_POST['description'], date('Y-m-d H:i:s'));
                header("Location: index.php?url=list-category");
            }
        }
        include "Views/category/UpdateCategory.php";
    }

    function removeCategory($id)
    {
        $deleteCategory = $this->categoryModel->deleteCategory($id);
        $deleteProduct = $this->productModel->deleteProductByCate($id);

        header("Location: index.php?url=list-category");
    }
}
