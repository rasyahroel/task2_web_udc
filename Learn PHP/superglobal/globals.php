<?php
$x = 100;
$y = 200;
function add()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z;
