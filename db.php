<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud'
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>