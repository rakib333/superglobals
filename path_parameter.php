<?php
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

// var_dump($_SERVER['REQUEST_URI']);

$url_path = $_SERVER['REQUEST_URI'];

// print_r($url_path);
// exit();

$url_path = trim($url_path, '/');
// echo $url_path;

$segment = explode('/', $url_path);
// echo "<pre>";
// print_r($segment);
// echo "</pre>";
if (isset($segment[1])) {
    $id = $segment[1];
    echo $id;
} else {
    echo "Not found anything";
}
