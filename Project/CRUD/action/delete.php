<?php 
include 'conn.php';
$id = $_GET['id'];
$row = mysqli_query($conn, "DELETE from mhs where id_mhs = '$id'");
header('location:..\index.php'); // redirect