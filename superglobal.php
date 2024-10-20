<?php

echo 'Hello world';
echo '<pre>';
// var_dump($_SERVER);
echo '</pre>';

$url = $_SERVER['REQUEST_URI'];
echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];
// echo "<br>";

$parsed_url = parse_url($url);

// var_dump($parsed_url); 

parse_str($parsed_url['query'], $query_params);
$query_params['name'] = 'Habibullah';


$query_params['gender'] = 'male';
echo "<br>";
echo '<pre>';
// print_r($query_params);
echo '</pre>';
// echo $parsed_url['query'];


$new_build_str = http_build_query($query_params);

echo urlencode($new_build_str);
echo "<br>";
echo urldecode($new_build_str);
