<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 300000000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "upload/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header("Location: files.php?uploadedsuccess");
            } else {
                echo "Sorry, your file size is too big!";
            }
        } else {
            echo "Sorry, there was an error! Try it again";
        }
    } else {
        echo "Sorry, your file type is not accepted";
    }
}