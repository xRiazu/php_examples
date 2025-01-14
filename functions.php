<?php
    include 'partials/header.php';
    //calculate area
    function calculateArea($length, $width) {
        $area = $length * $width;
        return $area;
    }
    $result = calculateArea(5, 9);
    echo "The area is: $result " ; 
    echo "<br>";
?>

<?php
    include 'partials/header.php';
    //string function: strlen()
    $string = "Rainbow Six Siege";
    $stringLength = strlen($string);
    echo "The length of the string is $stringLength";
    echo "<br>";
?>

<?php
    include 'partials/header.php';
    //string function: strtoupper()
    $str = "hello";
    $uppercase = strtoupper($str);
    echo $uppercase;
    echo "<br>";
?>

<?php
    include 'partials/header.php';
    //maths function: rand()
    $randomNumber = rand(1, 100);
    echo "The  random number is: $randomNumber";
    echo "<br>";
?>                  

<?php
    include 'partials/header.php';
    //maths function: pow()
    $base = 4;
    $exp = 2;
    $powResult = pow($base, $exp);
    echo "4 to the power of 2 is: $powResult";
    echo "<br>";
?>

<?php
    include 'partials/footer.php';
    //maths function: sqrt()
    $number = 64;
    $squareRoot = sqrt($number);
    echo "Square Root of $number: $squareRoot";
    echo "<br>";
?>
