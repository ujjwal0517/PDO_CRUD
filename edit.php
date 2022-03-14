<?php include 'header.php';
      include 'connection.php';
$id = $_GET['id'];
$query = "SELECT * from detail where id = $id";
$statement = $connection->query($query);
$result = $statement->fetch(PDO::FETCH_ASSOC);

echo'
<div class="container">
    <div class="row">
        <div class="col-25">
        <form action="update.php" method="POST">
         <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="'.$result['name'].'">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="'.$result['address'].'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="'.$result['email'].'">
    
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
        </div>
    </div>
</div>';

include 'footer.php';
?>