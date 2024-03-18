<?php


if ($_SERVER["REQUEST METHOD"] == "POST") {
    $query = "INSERT INTO posts (title, category_id) VALUES ('blog 3', 2)";
}
//dd($_SERVER);

$title = "cancer";
require "views/posts.create.view.php";