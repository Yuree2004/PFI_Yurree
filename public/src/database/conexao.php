<?php
    $db_host = "mysql:host=localhost;dbname=yuree2";
    $db_user = "root";
    $db_pass = "";

    try {
        $database = new PDO($db_host, $db_user, $db_pass);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed". $e->getMessage() ."";
    }

    
?>