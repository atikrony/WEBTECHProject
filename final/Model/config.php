<?php
    function getConnection(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "shop";

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }