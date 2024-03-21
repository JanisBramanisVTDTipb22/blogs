<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);                     

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "INSERT INTO posts (title, category_id) 
        VALUES (:title, :category_id);";
        $params = [
            ":title" => $_POST["adrians"],
            ":category_id" => $_POST["category-id"]
        ];
    $db->execute($query, $params);
    header("Location: /");
    die();
}
//dd($_SERVER);

$title = "cancer";
require "views/posts.create.view.php";