<?php
include_once('components/db.php');
$id = $_GET['id'];
$del = mysqli_query($mysqli, "delete from appointments where id = '$id'");
if($del) {
    mysqli_close($mysqli);
    header("location:index.php");
    exit;
} else{
    echo "Error deleting record";
}