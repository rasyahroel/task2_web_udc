<?php 
include 'conn.php';
$id = $_GET['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$row = mysqli_query($conn, "UPDATE mhs set nim = '$nim', nama = '$nama', jurusan = '$jurusan' where id_mhs = '$id'");
header('location:../crud_task2.php'); // redirect