<?php include 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-25">
        <form action="insert.php" method="POST">
         <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
    
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
        </div>
    </div>
</div>

<?php include 'footer.php'?>