<?php

require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM posts WHERE id=:id";
// dd($_GET["id"]);
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

//dd($posts);
require "./views/posts/show.view.php";