<?php 

include 'db.php';

$id = $_GET['id'];

$sql = "delete from crud where id=$id";

if($db->query($sql)){
    $msg = "Record deleted successfully";
} else{
    $msg = "ERROR: Could not able to execute $sql. " . $db->error;
}

header("Location: list.php?msg=$msg");

?>