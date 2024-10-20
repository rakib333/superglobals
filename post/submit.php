<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        echo 'Registration successful';
        echo "User name is : $username";
        echo "<br>";
        echo "User password is : $username";
    } else {
        echo "Both fiels are required";
    }
}
