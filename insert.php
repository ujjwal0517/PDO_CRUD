<?php
include 'connection.php';

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

$insertquery = "INSERT INTO detail(name, address, email) VALUES('$name', '$address', '$email')";
$connection->query($insertquery);

header("Location: index.php");