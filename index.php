<?php

require "functions.php";
require "Database.php";


$config = require("config.php");

$id = $_GET["id"];
//dd($id);

$query = "SELECT * FROM posts";
if (isset($_GET["id"]) && $_GET["id"] !="") {
    $id = $_GET["id"];
    $query = "SELECT * FROM posts WHERE id=$id";
} else {

}

$db = new Database($config);
$posts = $db
            ->execute("SELECT * FROM posts WHERE id=$id")
            ->fetchAll();

echo "<form>";
echo "<input name='id' />";
echo "<button>Submit</button>";
echo "</form>"; 

 
echo "<h1>posts</h1>";
echo "<h4>I love covid</h4>";
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";