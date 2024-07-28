<?php


// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);


// $name = $_POST['name'];
// $price = $_POST['price'];
// $count = $_POST['count'];
// $cat = $_POST['categroy'];
// $brand = $_POST['brand'];
// $des = $_POST['des'];

// $img_name=$_FILES["image"]["name"];

// $img_size=$_FILES["image"]["size"];

// $img_tmp =$_FILES["image"]["tmp_name"];


// $img_exp =explode(".",$img_name);

// $img_ext=end($img_exp );

// $allow_ext=["jpg","png","jpeg","bmb","webp"];


// $new_img_name =time().rand(1,100000).$img_name;

// move_uploaded_file($img_tmp,"image/$new_img_name");



// include "../conn.php";
// $insert ="INSERT INTO products( name, price, image, count, cat, brand, description)
//  VALUES ('$name','$price','$new_img_name','$count','$cat','$brand','$des')";


// $query = $conn ->query($insert);


// if($query){
//     header("location: ../../products.php");
// }else{
//     echo $conn -> error;
// }



$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
$cat = $_POST['categroy'];
$brand = $_POST['brand'];
$des = $_POST['des'];


$allow_ext=["jpg","png","jpeg","bmb","webp"];

$new=[];

foreach($_FILES["image"]["name"] as $key => $value){
    $img_name = $_FILES["image"]["name"][$key];
    $img_size = $_FILES["image"]["size"][$key];
    $img_tmp = $_FILES["image"]["tmp_name"][$key];

    $ext = pathinfo($img_name , PATHINFO_EXTENSION);
    if($img_size>3000000 && !in_array($ext , $$allow_ext)){
        exit();
    }
    $new_img_name =time().rand(1,100000).$img_name;
    move_uploaded_file($img_tmp,"image/$new_img_name");
    $new[]=$new_img_name;

}

$new_img = implode("," , $new);

include "../conn.php";
$insert ="INSERT INTO products( name, price, image, count, cat, brand, description)
 VALUES ('$name','$price','$new_img','$count','$cat','$brand','$des')";

$query = $conn ->query($insert);

if($query){
    header("location: ../../products.php");
}else{
    echo $conn -> error;
}




?>