<form method="post" action="fun/user/insert.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Gmail</label>
      <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" name="gender" value="1" id="inlineRadio1" class="form-check-input">
      <label class="form-check-label" for="inlineRadio1">male</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" name="gender" value="2" id="inlineRadio2" class="form-check-input">
      <label class="form-check-label" for="inlineRadio2">female</label>
    </div>
  <br>
    <div class="form-group">
      <label for="exampleFormControlSelect1">privliges</label>
      <select id="exampleFormControlSelect1" class="form-control" name="priv">
        <option value="1">owner</option>
        <option value="2">supervisor</option>
        <option value="3">admin</option>
        <option value="4">member</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>