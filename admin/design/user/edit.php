<?php

    $id = $_GET['id'];
    include "fun/conn.php";
    $select ="SELECT * FROM users WHERE id = $id";
    $query = $conn -> query($select);
    $user = $query -> fetch_assoc();


?>



<form method="post" action="fun/user/update.php">
    <input type="hidden" name="id" value="<?=$user['id']?>">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" name="username" value="<?=$user['username']?>" class="form-control" id="exampleInputEmail1" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" value="<?=$user['password']?>" class="form-control" id="exampleInputEmail1" placeholder="Edit password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <input type="text" name="address" value="<?=$user['address']?>" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Gmail</label>
      <input type="email" name="email" value="<?=$user['email']?>" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" name="gender" value="1" id="inlineRadio1" class="form-check-input"
      <?= $user['gender'] == 1 ? 'checked' : '' ?> >
      <label class="form-check-label" for="inlineRadio1">male</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" name="gender" value="2" id="inlineRadio2" class="form-check-input"
      <?= $user['gender'] == 2 ? 'checked' : '' ?> >
      <label class="form-check-label" for="inlineRadio2">female</label>
    </div>
  <br>
    <div class="form-group">
      <label for="exampleFormControlSelect1">privliges</label>
      <select id="exampleFormControlSelect1" class="form-control" name="priv">
        <option value="1" <?= $user['pr'] == 1 ? 'selected' : '' ?> >owner</option>
        <option value="2" <?= $user['pr'] == 2 ? 'selected' : '' ?> >supervisor</option>
        <option value="3" <?= $user['pr'] == 3 ? 'selected' : '' ?> >admin</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>