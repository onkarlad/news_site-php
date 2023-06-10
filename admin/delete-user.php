<?php
include "config.php";
$uid=$_GET['id'];
$sql="delete from user where user_id='$uid'";
if(mysqli_query($conn,$sql)){
    header("location:$hostname/admin/users.php");
}
mysqli_close($conn);


?>