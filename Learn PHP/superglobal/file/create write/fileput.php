<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write File</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $myFile = fopen("Task 2 PHP/note.txt", "w");
        $txt = "My age is " . $_POST['age'] . "\n";
        fwrite($myFile, $txt);
        fclose($myFile);
    }
    ?>

    <form action="fileput.php" method="post">
        <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
</body>

</html>