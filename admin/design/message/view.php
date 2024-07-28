
				<table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Gmail</th>
                            <th>status</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "fun/conn.php";
                $select = "SELECT * FROM contact";
                $query = $conn -> query($select);
                foreach($query as $message){

                ?>
                    <tr>
                            <td><?=$message['id']?></td>
                            <td><?=$message['name']?></td>
                            <td><?=$message['phone']?></td>
                            <td><?=$message['email']?></td>
                            <td>
                                
                                <?php
                                if($message['status'] == 0){
                                    echo "unread";
                                }else{
                                    echo "read";
                                }
                            ?>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="ok btn btn-<?php
                                if($message['status'] == 0){
                                    echo "danger";
                                }else{
                                    echo "primary";
                                }
                                ?>" data-toggle="modal" data-target="#exaMpleModal<?=$message['id']?>">
                                <?php
                                if($message['status'] == 0){
                                    echo "unread";
                                }else{
                                    echo "read";
                                }
                                ?>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exaMpleModal<?=$message['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?=$message['name']?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?= $message['message'] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="fun/message/update.php?id=<?=$message['id']?>" class="btn btn-primary">close</a>
                                            <!-- <a href="" class="btn btn-primary">close</a> -->
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
                <!-- <script>
                    $(document).ready(function() {
                    $(".ok").click(function() {
                        let id = 
                        $.post("fun/message/update.php", {
                             id : id 
                            }, function(data) {
                            $(this).parent().prev().text(data)
                        })
                    })
                    })
                </script> -->
                