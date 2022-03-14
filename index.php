<?php include 'header.php'?>
<?php include 'connection.php'?>
<div class="button text-center">
<a class="btn btn-primary m-5 p-4 btn btn-lg" href="create.php" role="button">Add Employee</a>
</div>
<?php
$find = "SELECT * FROM detail";
$statement = $connection->query($find);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '
<table class="table">
<thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Address</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
  </tr>
</thead>';
foreach($result as $res)
{
echo '

<tbody>
    <tr>
    <th scope="row">'.$res['id'].'</th>
    <td>'.$res['name'].'</td>
    <td>'.$res['address'].'</td>
    <td>'.$res['email'].'</td>
    <td>
    <a class="btn btn-success text-black border border-success" href="edit.php?id='.$res['id'].'">Edit</a>
    <a class="btn btn-danger text-black border border-danger" href="delete.php?id='.$res['id'].'">Delete</a>
    </td>
  </tr>
  ';
}
 echo '
</tbody>
</table>

';



include 'footer.php';

?>
