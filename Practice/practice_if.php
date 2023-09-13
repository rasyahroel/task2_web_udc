<?php
define("TITLE", "If Else If");
$myname = "Roy";

$species = "Human";
$nativeLanguage = "German";
$yearsOnEarth = 25;
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
    <h2>Your Example</h2>
    <div>
        <?php
        if ($species == 'Black Rhino') {
            echo '<p>Welcome, Black Rhino. You and the rest of the rhinos will love this big lake.</p>';
        } elseif ($species == 'Human') {
            echo '<p>Welcome, Human! Please leave the black rhino alone.</p>';
        } else {
            echo '<p>Welcome to Earth! Your kind is unknown to us.</p>';
        }
        ?>

        <br>
        <h3>Another Example</h3>
        <?php
        if ($yearsOnEarth == 20) {
            echo '<p>Congratulations for being on Earth for 20 years!</p>';
        } elseif ($yearsOnEarth < 20) {
            echo '<p>Not quite 20 yet, young grasshopper.</p>';
        } else {
            echo '<p>You must be more than 20 years old</p>';
        }
        ?>

        <br>
        <h3>A Combination</h3>
        <?php 
        if ($nativeLanguage == 'German') {
            echo "<p>Willkommen</p>";
        } elseif ($species == 'Black Rhino') {
            echo "<p>Oh! You must be a rhino.</p>";
        } else {
            echo "<p>Well then, you do not speak German, nor are you a rhino.</p>";
        }
        ?>
    </div>
    <hr>
    <small>&copy; - <?php echo $myname ?></small>
</body>

</html>