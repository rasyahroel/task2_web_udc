<!-- <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="team.php">Team</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul> -->

<ul>
    <?php
    foreach ($navItems as $item) {
        echo "<a href=\"$item[slug]\"><li>$item[title]</li></a>";
    }
    ?>
</ul>