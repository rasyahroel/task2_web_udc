<?php 
include 'conn.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$row = mysqli_query($conn, "INSERT INTO mhs(nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')");
header('location:..\crud_task2.php'); // redirect