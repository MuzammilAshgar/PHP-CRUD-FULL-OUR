<?php
include('../conntion.php');
$d_id = $_GET['id'];
$sql = "DELETE FROM $table WHERE id=$d_id";
if (mysqli_query($conn,$sql)) {
    header("Location:../../../index.php");
}else{
    echo "code not work";
}


?>
