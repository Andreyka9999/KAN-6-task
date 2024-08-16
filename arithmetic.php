<?php 
/*  //Arithmetic operations 
    // + - / * ** %
*/

$a = 4;        // variable a
$b = 3;        // variable b
$c = null;     // variable definition as 0

$c = $a + $b;
echo "Addtion operation result: $c \n";         // Variable $a and $b sum   

$c = $a - $b;
echo "Substraction operation result: $c \n";    // Variable $a and $b substraction

$c = $a * $b; 
echo "Multiplication operation result: $c \n";  // Variable $a and $b multiplication


// For the division by zero case
if ($b != 0) {       // In case if $b is not = 0
    $z = $a / $b;
    echo "Division: $z \n";
} else {
    echo "Division: Cannot divide by zero"; // In case if $b is = 0
}


?>