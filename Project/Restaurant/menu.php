<?php
define("TITLE", "Menu || Roy's Resto and Café");
include('includes/header.php')
?>

<div class="menu">
    <hr>
    <h1>Our Delicious Menu</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, voluptatem quas. Nesciunt adipisci odio
        officia officiis facere quod laborum provident, ex dolorem corrupti laboriosam, quae molestias asperiores alias
        corporis sit illo tenetur enim aliquam? Harum cupiditate, eum voluptatem quidem fugit illum, expedita
        repudiandae ipsa doloremque, facilis perspiciatis? Voluptate tempora quos itaque amet a reprehenderit ullam ad
        rerum atque facilis debitis, similique assumenda aspernatur nesciunt at, delectus obcaecati quasi, corrupti fuga
        exercitationem. Deleniti assumenda molestias rerum dolores, officia quis necessitatibus odio quia perferendis
        mollitia animi, voluptatem pariatur ex cumque ratione. Ipsum quas error perferendis harum omnis necessitatibus
        distinctio repellat facilis neque! &mdash;</p>
    <p><em>Click any menu item to learn more about it</em></p>
    <hr>
    <ul>
        <?php
        foreach ($menuItems as $dish => $item) {
            $money = number_format($item['price'], 0, ',', '.')
        ?>
        <a href="dish.php?item=<?php echo $dish ?>">
            <li><?php echo $item['title'] ?> <sup>Rp.</sup><?php echo $money ?></li>
        </a>
        <?php } ?>
    </ul>
</div>

<?php
include('includes/footer.php')
?>