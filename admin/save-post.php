<?php
session_start();
include "config.php";



if(isset($_FILES["fileToUpload"])){
    $errors=array();
    $file_name =$_FILES['fileToUpload']['name'];
    $file_tmp_name =$_FILES['fileToUpload']['tmp_name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_type =$_FILES['fileToUpload']['type'];
    $extension=array("jpg","png","jpeg");
    $file_ext=strtolower(end(explode(".",$file_name)));

    if(in_array($file_ext,$extension)=== false){
        $errors[]="extension of file is not supported";
    }

    if($file_size>2097152){
        $errors[]="file should be lower than 2 mb";
    }

    if(empty($errors) == true){
        move_uploaded_file($file_tmp_name,"upload/".$file_name);
    }else{
                print_r($errors);
                die();
            }
}
else{
        echo "upload the file";
    }

$title = mysqli_real_escape_string($conn,$_POST['post_title']);
$description = mysqli_real_escape_string($conn,$_POST['postdesc']);
$category = mysqli_real_escape_string($conn,$_POST['category']);
$date =date("d M, Y");
$author=$_SESSION['user_id'];

$sql ="insert into post(title,description,category,post_date,author,post_img) values('{$title}','{$description}','{$category}','{$date}','{$author}','{$file_name}');";
$sql.="update category set post=post+1 where category_id={$category}";

if(mysqli_multi_query($conn,$sql)){
    header("location:$hostname/admin/post.php");
}else{
    echo "query failed";
}


?>