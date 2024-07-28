<a class="btn btn-primary" href="?action=add">Add Brand</a>
                <br>
                <br>
				<table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Brand name</th>
                            <th>Controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "fun/conn.php";
                $select = "SELECT * FROM brand";
                $query = $conn -> query($select);
                foreach($query as $brand){

                ?>
                    <tr>
                            <td><?=$brand['id']?></td>
                            <td><?=$brand['name']?></td>
                            <td>
                                <a class="btn btn-primary" href="?action=edit&id=<?=$brand['id']?>">Edit</a>
                                <!-- <a class="btn btn-danger" href="fun/category/delete.php?id=<?=$brand['id']?>">Delete</a> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exaMpleModal<?=$brand['id']?>">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exaMpleModal<?=$brand['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <span class="text-danger" style="font-weight:bold"><?=$brand['name']?></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="fun/brand/delete.php?id=<?=$brand['id']?>" class="btn btn-danger">Confirm</a>
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