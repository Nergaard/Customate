<?php

    // Ekstern DB
    $servername = "outgearx.com";
    $db_name = "outgearx_kiosk";
    $db_username = "outgearx_admin";
    $db_password = "12345";

    try {

        // Forsøker å logge inn til databasen
        $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);

    } catch (PDOException $e) {

        // Send error ved feil i databasetilkoblingen
        exit('Database connection error');

    }
