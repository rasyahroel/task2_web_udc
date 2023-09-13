<?php
define("TITLE", "Team || Roy's Resto and Café");
include('includes/header.php')
?>

<div class="team">
    <hr>
    <h1>Our Team at Roy's Resto and Café</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique error ipsa, quasi ex ipsam fuga iusto necessitatibus? Eligendi cupiditate quis ab nisi tenetur adipisci nemo, voluptatum voluptate consequuntur! Porro aspernatur explicabo inventore fuga deserunt, sit vel maxime id facilis nemo laboriosam dolore accusantium aliquid culpa! Magni quisquam soluta facilis quo.</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, iste.</p>
    <hr>

    <?php
    foreach ($teamMembers as $member) {
    ?>
        <div class="profile">
            <img class="imageProfile" src="img/<?php echo $member['image'] ?>" alt="<?php echo $member['name'] ?>">
            <h2><?php echo $member['name'] ?></h2>
            <p><?php echo $member['bio'] ?></p>
        </div>
    <?php
    }
    ?>
</div>

<?php
include('includes/footer.php')
?>