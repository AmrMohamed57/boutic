<!-- <a class="btn btn-primary" href="?action=add">Add user</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- <form method="post" action="fun/user/insert.php"> -->
      <form>
          <div class="modal-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" value="" class="name form-control " id="exampleInputEmail1">
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" value="" class="password form-control " id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Address</label>
            <input type="text" name="address" value="" class="address form-control " id="exampleInputEmail2">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword3">Gmail</label>
            <input type="email" name="email" value="" class="gmail form-control " id="exampleInputEmail3">
          </div>
        <br>
          <div class="form-group">
            <label for="exampleFormControlSelect2">gender</label>
            <select id="exampleFormControlSelect2" class="gender form-control " name="gender">
              <option value="1">male</option>
              <option value="2">female</option>
            </select>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlSelect1">privliges</label>
            <select id="exampleFormControlSelect1" class="pr form-control " name="priv">
              <option value="1">owner</option>
              <option value="2">supervisor</option>
              <option value="3">admin</option>
              <option value="4">member</option>
            </select>
          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">ADD</button>
            </div>
      </form>

    </div>
  </div>
</div>
<!-- ///////////////////////////////////////////////////// -->
                <br>
                <br>
				<table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>gmail</th>
                            <th>address</th>
                            <th>gender</th>
                            <th>privliges</th>
                            <th>controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "fun/conn.php";
                $select = "SELECT * FROM users";
                $query = $conn -> query($select);
                foreach($query as $user){

                ?>
                    <tr>
                            <td><?=$user['id']?></td>
                            <td><?=$user['username']?></td>
                            <td><?=$user['email']?></td>
                            <td><?=$user['address']?></td>
                            <td>
                                <?php
                                if($user['gender'] == 1){
                                    echo "male";
                                }else{
                                    echo "female";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($user['pr'] == 1){
                                    echo "owner";
                                }elseif($user['pr'] == 2){
                                    echo "supervisor";
                                }else{
                                    echo "admin";
                                }
                                ?>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="?action=edit&id=<?=$user['id']?>">Edit</a>
                                <!-- <a class="btn btn-danger" href="fun/delete_user.php?id=<?=$user['id']?>">Delete</a> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exaMpleModal<?=$user['id']?>">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exaMpleModal<?=$user['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <span class="text-danger" style="font-weight:bold"><?=$user['username']?></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="fun/user/delete.php?id=<?=$user['id']?>" class="btn btn-danger">Confirm</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                <?php
                };
                ?>
                    </tbody>
                </table>


<script src="css/jquery-3.7.0.min.js"></script>
<script>
  $("form").submit(function(event){
    event.preventDefault()
    let name =$(".name").val()
    let password =$(".password").val()
    let address =$(".address").val()
    let gmail =$(".gmail").val()
    let gender =$(".gender").val()
    let pr =$(".pr").val()

    if(name && password && address && gmail && gender && pr){
      $.post("fun/user/insert.php" , {
        myName : name ,
        myPass : password ,
        myAddress : address ,
        myGmail : gmail ,
        myGender : gender , 
        myPr : pr  
      } , function(result){
        $(".table").append(result)
      })
      $("input").val("")
      // $(".password").val("")
      // $(".address").val("")
      // $(".gmail").val("")
      // $(".gender").val("")
      // $(".pr").val("")
    }
    $("#exampleModal").modal("hide")
  })
</script>