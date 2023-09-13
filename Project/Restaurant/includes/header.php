<?php
$companyName = "Roy's Resto and Café";
include('arrays.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo TITLE ?></title>
</head>

<body id="final">
    <div class="container">
        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="img/bannerfood.jpg" alt="Food Restaurent">
            </a>
        </div>
        <div id="nav">
            <?php include('includes/nav.php') ?>
        </div>