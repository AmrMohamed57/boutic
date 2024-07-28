<form method="post" action="fun/category/insert.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Category Name</label>
      <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="Add Category">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Category Type</label>
      <select name="type" id="">

      <?php

      include "fun/conn.php";
      $select ="SELECT * FROM category WHERE parent = 0";
      $query = $conn -> query($select);
      ?>

      <option value="">main category</option>
      
      <optgroup label="Sub Category">
        <?php
      while($cat = $query -> fetch_assoc()){?>

        <option value="<?= $cat['id']?>"><?= $cat['name']?></option>

        <?php } ?>
      </optgroup>


      </select>
    </div>
  <br>
    
    <button type="submit" class="btn btn-primary">Add</button>
  </form>