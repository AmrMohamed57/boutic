<?php
session_start();

    if($_SESSION['login_id']){
        $user_id = $_SESSION['login_id'];
        $pro_id = $_GET['id'];
        include "../fun/conn.php";

        $check ="SELECT * FROM cart WHERE user_id = '$user_id' AND pro_id = '$pro_id'";
        $query = $conn -> query($check);


        if($query -> num_rows > 0){
            $row = $query -> fetch_assoc();
            $quantity = $row['quantity'] += 1;

            $update = "UPDATE cart SET
            quantity = '$quantity'
            WHERE user_id = '$user_id' AND pro_id = '$pro_id'
            ";
            $query = $conn -> query($update);
        }else{
            $insert="INSERT INTO cart
            (user_id , pro_id , quantity)
            values('$user_id' , '$pro_id' , 1)";
            $query = $conn -> query($insert);
        };


        header("location:../cart.php");





        

    }else{
        header("location:../login.php");
    }
    



?>