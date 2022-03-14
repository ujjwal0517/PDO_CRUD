<?php include 'connection.php';

$id = $_GET['id'];

$query = "DELETE FROM detail WHERE id= '$id'";
$connection->query($query);
header("Location: index.php");

?>