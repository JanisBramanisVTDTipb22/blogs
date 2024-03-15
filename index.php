<?php

require "functions.php";

echo "omg ";

$data = [
    "name" => "Railijs",
    "age" => 6.5,
    "height" => "5'5"
];

$data2 = [
    "name" => "Didzis",
    "height" => "6'9"
];

echo $data["age"];


if (array_key_exists("age", $data2)) {
    echo $data2["age"];
}

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/story" => "controllers/story.php"
];

if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    http_response_code(404);
    require "controllers/404.php";
}
//dd(parse_url($_SERVER["REQUEST_URI"]));
