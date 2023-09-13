<?php
define("TITLE", "Menu Item || Roy's Resto and Café");
include('includes/header.php');

function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
};

if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars($_GET['item']);
    $dish = $menuItems[$menuItem];
};

function suggestedTip($price, $tip)
{
    $totalTip = $price * $tip;
    echo number_format($totalTip, 0, ',', '.');
}
?>

<hr>
<div class="dish">
    <h1><?php echo $dish['title'] ?> <span><sup>Rp.</sup><?php echo $dish['price'] ?></span></h1>
    <!-- price buat float kanan -->
    <p><?php echo $dish['blurb'] ?></p>
    <br>
    <p><strong>Suggested beverage: <?php echo $dish['drink'] ?></strong></p>
    <p><em>Suggested Tip: <sup>Rp.</sup><?php suggestedTip($dish['price'], 0.20) ?></em></p>
</div>
<hr>
<a href="menu.php" class="previous">&laquo; Back to Menu</a>

<?php
include('includes/footer.php');
?>