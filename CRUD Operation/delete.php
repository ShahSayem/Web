<?php
    include 'config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `demo` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:index.php');