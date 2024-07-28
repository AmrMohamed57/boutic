<a class="btn btn-primary" href="?action=add">Add category</a>
                <br>
                <br>
				<table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Category name</th>
                            <th>Controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "fun/conn.php";
                $select = "SELECT * FROM category";
                $query = $conn -> query($select);
                foreach($query as $category){

                ?>
                    <tr>
                            <td><?=$category['id']?></td>
                            <td><?=$category['name']?></td>
                            <td>
                                <a class="btn btn-primary" href="?action=edit&id=<?=$category['id']?>">Edit</a>
                                <!-- <a class="btn btn-danger" href="fun/category/delete.php?id=<?=$category['id']?>">Delete</a> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exaMpleModal<?=$category['id']?>">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exaMpleModal<?=$category['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <span class="text-danger" style="font-weight:bold"><?=$category['name']?></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="fun/category/delete.php?id=<?=$category['id']?>" class="btn btn-danger">Confirm</a>
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