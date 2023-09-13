<?php
// Params to connect tom a database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "db_udc";

// Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Could not connect to database");
};

?>




<!-- Cek database di web udah terkoneksi atau belum -->
<!-- <?php
        $sql = "SELECT * FROM users where id = 1";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['username'] . "<br>";
            }
        } else {
            echo "No rows found";
        }
        ?> -->