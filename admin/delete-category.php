<?php
include "config.php";
$catid=$_GET['cat_id'];
$sql="delete from category where category_id='$catid'";
if(mysqli_query($conn,$sql)){
    header("location:$hostname/admin/category.php");
}
?>