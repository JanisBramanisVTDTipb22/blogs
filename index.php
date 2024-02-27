<?php

require "functions.php";
require "database.php";


$config = require("config.php");

$db = new database($config);
$posts = $db
            ->execute("SELECT * FROM posts")
            ->fetchAll();
dd($posts); 

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";