<!DOCTYPE html>
<html>

<body>

<?php

$t = date("H");
 
if ($t % 2 == 0) {
    echo "The time is Even <br>";
} else {
    echo "The time is Odd";
}    
$x = 5;
$y = 4;
$z = $x + $y;
echo "the sum of ". $x. " and ". $y. " is ". $z;

$h = '1. the cat in the hat';
$v = 'books i cant read';
$g = ' =(';

echo '<br>'. $v. '<br>'. $h. ' '. $g; 
    

    ?>
    
    
    
</body>
</html>