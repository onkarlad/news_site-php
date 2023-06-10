<?php
include "config.php";
$id=$_GET['id'];
$catid=$_GET['catid'];

$sql1="select * from post where post_id='$id'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
unlink("upload/".$row['post_img']);

$sql="delete from post where post_id='$id';";
$sql .="update category set post=post-1 where category_id={$catid}";
if(mysqli_multi_query($conn,$sql)){
    header("location:$hostname/admin/post.php");
}


?>