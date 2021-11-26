<?php

include 'connect1.php';

$id = $_GET['id'];

$sql = "DELETE FROM registration WHERE id='$id' ";

if($conn->query($sql) === TRUE) {
    header("Location:user-list.php");
}else{
    echo " Error Deleting record: " . $conn->error;
}
?>