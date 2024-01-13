<?php
require_once 'Models/DB.php';
class Category extends DB
{

    function getCategory()
    {
        $sql = "SELECT * FROM category";
        return $this->getData($sql);
    }

    function getOneCategory($id)
    {
        $sql = "SELECT * FROM category WHERE id = $id";
        return $this->getData($sql, false);
    }

    function addCategory($name, $description)
    {
        $sql = "INSERT INTO category(name, description) values ('$name', '$description')";
        return $this->getData($sql, false);
    }

    function updateCategory($id, $name, $description, $update_at)
    {
        $sql = "UPDATE category SET name = '$name', description = '$description', update_at = '$update_at' WHERE id = $id";
        return $this->getData($sql, false);
    }

    function deleteCategory($id)
    {
        $sql = "DELETE FROM category WHERE id = $id";
        return $this->getData($sql, false);
    }
}
