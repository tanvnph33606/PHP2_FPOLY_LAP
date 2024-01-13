<?php
require_once 'Models/env.php';

class DB
{
    private $conn;

    function __construct()
    {
        try {
            $connect = new PDO(
                "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET,
                DBUSER,
                DBPASS
            );

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->conn = $connect;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getData($query, $getAll = true)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
