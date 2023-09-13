<!-- Practice about Variables and Constants -->
<?php
define("TITLE", "Variables and Constants");
$myname = "Roy";
$fav_color = "Blue";
$birthyear = 2000;

date_default_timezone_set("Asia/Jakarta");
$today = date('F j, Y');
$thisyear = date('Y');

$myAge = ($thisyear - $birthyear);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Hands Dirty: <?php echo TITLE ?></title>
</head>

<body>
    <h1>Get Your Hands Dirty: <?php echo TITLE ?></h1>
    <hr>
    <h3>Today's Date</h3>
    <p><?php echo $today ?></p>
    <h3>My Name</h3>
    <p><?php echo $myname ?></p>
    <h3>My Favourite Color</h3>
    <p><?php echo $fav_color ?></p>
    <h3>My Age</h3>
    <p><?php echo $myAge ?></p>
    <hr>
    <small>&copy;<?php echo $thisyear ?> - <?php echo $myname ?></small>
</body>

</html>