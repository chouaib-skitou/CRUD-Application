<?php 

$conn = new mysqli('localhost', 'root', '', 'crud_pdo_php');

if(!$conn) {
    die(mysqli_error($conn));
}


?>