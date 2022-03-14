<?php include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
}
$query = "UPDATE detail SET name='$name', address='$address', email='$email'";
$connection->query($query);

header("Location: index.php");





?>
