<?php
include "config.php";

if(empty($_FILES['new-image']['name'])){
    $file_name =$_POST['old-image'];
}else{
        $errors=array();

   $file_name=$_FILES['new-image']['name'];
   $file_tmp_name=$_FILES['new-image']['tmp_name'];
   $file_size=$_FILES['new-image']['size'];
   $file_tye=$_FILES['new-image']['type'];
    $extensions=array("jpg","png","jpeg");
    $ext=strtolower(end(explode(".",$file_name)));

    if(in_array($ext,$extensions) === false){
        $errors[]="choose correct file extension";
    }
    
    if($file_size>3097152 == true){
        $errors[]="file size should be lower than 2 mb";
    }
    
    if(empty($errors) == true){
        move_uploaded_file($file_tmp_name,"upload/".$file_name);
    }else{
        print_r($errors);
        die();
    }
   
}

$sql="update post set title='{$_POST['post_title']}',description='{$_POST['postdesc']}',category={$_POST['category']},post_img='$file_name' where post_id={$_POST['post_id']}";
if(mysqli_query($conn,$sql)){
    header("location:$hostname/admin/post.php");
}

?>