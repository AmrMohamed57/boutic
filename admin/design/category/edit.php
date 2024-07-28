<?php

    $id = $_GET['id'];
    include "fun/conn.php";
    $select ="SELECT * FROM category WHERE id = $id";
    $query = $conn -> query($select);
    $category = $query -> fetch_assoc();


?>



<form method="post" action="fun/category/update.php">
    <input type="hidden" name="id" value="<?=$category['id']?>">
    <div class="form-group">
      <label for="exampleInputEmail1">Edit Category</label>
      <input type="text" name="name" value="<?=$category['name']?>" class="form-control" id="exampleInputEmail1" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>