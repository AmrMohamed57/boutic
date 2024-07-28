
<?php





$username = $_POST['myName'];
$password = md5($_POST['myPass']);
$email = $_POST['myGmail'];
$gender = $_POST['myGender'];
$address = $_POST['myAddress'];
$priv = $_POST['myPr'];

include "../conn.php";

$insert ="INSERT INTO users
(username , password ,address, email , gender , pr) 
values
('$username' , '$password' , '$address' , '$email' , '$gender' , '$priv')";

$query = $conn -> query($insert);

if($query){
    $lastId = $conn -> insert_id;
    $select ="SELECT * FROM users where id = $lastId";
    $result = $conn -> query($select);
    $row = $result -> fetch_assoc();
    ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['username']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['address']?></td>
        <td>
            <?php
            $gender_id =$row['gender'];
            $select_gender ="SELECT * FROM gender where id = $gender_id";
            $query_gender = $conn -> query($select_gender);
            $gen = $query_gender -> fetch_assoc();
            echo $gen['name'];
            ?>
        </td>
        <td>
        <?php
            $pr_id =$row['pr'];
            $select_pr ="SELECT * FROM pr where id = $pr_id";
            $query_pr = $conn -> query($select_pr);
            $pr = $query_pr -> fetch_assoc();
            echo $pr['name'];
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
}else{

}




?>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
