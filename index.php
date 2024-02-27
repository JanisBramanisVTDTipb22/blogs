<?php

require "functions.php";
require "database.php";

$db = new database();
$posts = $db
            ->execute("SELECT * FROM posts")
            ->fetchAll();
dd($posts); 

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";