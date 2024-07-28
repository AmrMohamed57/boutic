<?php

    $id = $_GET['id'];
    include "fun/conn.php";
    $select ="SELECT * FROM brand WHERE id = $id";
    $query = $conn -> query($select);
    $brand = $query -> fetch_assoc();


?>



<form method="post" action="fun/brand/update.php">
    <input type="hidden" name="id" value="<?=$brand['id']?>">
    <div class="form-group">
      <label for="exampleInputEmail1">Edit Brand</label>
      <input type="text" name="name" value="<?=$brand['name']?>" class="form-control" id="exampleInputEmail1" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>