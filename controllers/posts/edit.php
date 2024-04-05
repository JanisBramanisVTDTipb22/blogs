<?php
require "Validator.php";
require("Database.php");
$config = require("./config.php");
$db = new Database($config);

$query = "SELECT * FROM posts WHERE id=:id";
    // dd($_GET["id"]);
$params = [":id"  => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "edit";
require "views/posts/edit.view.php";