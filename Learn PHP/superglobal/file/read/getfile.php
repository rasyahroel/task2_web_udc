<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>

<body>
    <?php
    $filePath = "Task 2 PHP/note.txt";
    $output = file_get_contents($filePath);
    // echo $output;
    $ages = explode("\n", $output);
    $totalAge = 0;
    $i = 0;
    foreach ($ages as $age) {
        echo $age;
        $totalAge += $age;
        $i++;
    }
    echo "The average age is " . ($totalAge / $i);
    ?>
</body>

</html>