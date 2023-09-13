<?php
define("TITLE", "Arrays");
$myname = "Roy";

$agegroup = array("child", "teenager", "adult");
$handlebar = array(
    "name" => "Handlebar",
    "color" => "black"
);
$fumanchu = array(
    "name" => "Fu Manchu",
    "color" => "brown"
);
$salvadordali = array(
    "name" => "Salvador Dali",
    "color" => "blonde"
);
$gentleman = array(
    array(
        "first_name" => "Carter",
        "country" => "Canada"
    ),
    array(
        "first_name" => "Rodrigo",
        "country" => "Uruguay"
    ),
    array(
        "first_name" => "Giovanni",
        "country" => "Italy"
    ),
)
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
        <h3><?php echo $gentleman[0]['first_name'] ?> from <?php echo $gentleman[0]['country'] ?></h3>
        <p><?php echo $gentleman[0]['first_name'] ?> is quite the <?php echo $agegroup[2] ?>! He sports a solid <?php echo $handlebar['name'] ?> moustache that is <?php echo $handlebar['color'] ?> in colour.</p>
        <br>
        <h3><?php echo $gentleman[1]['first_name'] ?> from <?php echo $gentleman[1]['country'] ?></h3>
        <p><?php echo $gentleman[1]['first_name'] ?> is quite the <?php echo $agegroup[1] ?>! He sports a solid <?php echo $fumanchu['name'] ?> moustache that is <?php echo $fumanchu['color'] ?> in colour.</p>
        <br>
        <h3><?php echo $gentleman[2]['first_name'] ?> from <?php echo $gentleman[2]['country'] ?></h3>
        <p><?php echo $gentleman[2]['first_name'] ?> is quite the <?php echo $agegroup[0] ?>! He sports a solid <?php echo $salvadordali['name'] ?> moustache that is <?php echo $salvadordali['color'] ?> in colour.</p>
    </div>
    <hr>
    <small>&copy; - <?php echo $myname ?></small>
</body>

</html>