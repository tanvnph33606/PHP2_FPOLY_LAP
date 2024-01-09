<?php
require_once "env.php";


function connectToDatabase()
{
    try {
        $connect = new PDO(
            "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connect;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}


function getData($query, $getAll = true)
{
    $conn = connectToDatabase();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
