<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary" href="?action=add">Add product</a>

    <br></br>

    <table class="table table-bordered">
        <thead class='bg-info'>

            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">image</th>
                <th scope="col">count</th>
                <th scope="col">categroy</th>
                <th scope="col">brand</th>
                <th scope="col">control</th>

            </tr>

        </thead>
        <tbody>

            <?php
                include('fun/conn.php');
                $select = "SELECT * FROM products" ;
                $result = $conn -> query($select) ; 
                
                while($pro = $result ->fetch_assoc()){
            ?>

            <tr>

                <td scope="col"><?=$pro['id']?></td>
                <td scope="col"><?=$pro['name']?></td>
                <td scope="col"><?=$pro['price']?></td>
                <?php
                    $pro_img = $pro['image'];
                    $pros = explode("," , $pro_img);
                    $pro1 = $pros[0];
                ?>
                <td scope="col"> <img src="fun/product/image/<?= $pro1?>" style="width: 100px; height: 100px;">  </td>
                <td scope="col"><?=$pro['count']?></td>

                <td scope="col">
                    <?php 
                        $cat_id = $pro['cat'];
                        $select_cat ="SELECT * FROM category WHERE id='$cat_id' ";
                        $reslut_cat = $conn -> query($select_cat) ;
                        $cat = $reslut_cat -> fetch_assoc();
                        echo $cat['name'];
                    ?>
                </td>

                <td scope="col">
                    <?php
                        $brand_id = $pro['brand'] ; 
                        $select_id  ="SELECT * FROM brand WHERE id='$brand_id' ";
                        $result_id = $conn -> query($select_id);
                        $brand = $result_id -> fetch_assoc();
                        echo $brand['name'] ; 
                    ?>
                </td>
                <td>
                    <a class="btn btn-primary" href="?action=edit&id=<?=$pro['id']?>">Edit</a>
                    <!-- <br>
                    <br> -->
                    <!-- <a class="btn btn-danger" href="fun/product/delete.php?id=<?=$pro['id']?>">Delete</a> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exaMpleModal<?=$pro['id']?>">
                    Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exaMpleModal<?=$pro['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete <span class="text-danger" style="font-weight:bold"><?=$pro['name']?></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="fun/product/delete.php?id=<?=$pro['id']?>" class="btn btn-danger">Confirm</a>
                            </div>
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
</body>
</html>




<!-- <div class="modal" tabindex="-1" id="<?=$pro['id']?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div> -->





