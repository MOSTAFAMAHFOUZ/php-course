<?php 

$n1 = rand(1,100);
$n2 = rand(1,100);

echo "n1 = $n1 ";
echo "<br>";

echo "n2 = $n2 ";
echo "<br>";

// add two numbers

function addTwoNumbers($number1,$number2){
    echo $number1 + $number2;
    echo "<br>";
}

addTwoNumbers($n1,$n2);


// subtract two numbers

function subtractTwoNumbers($number1,$number2){
    echo $number1 - $number2;
    echo "<br>";

}

subtractTwoNumbers($n1,$n2);


// devide two numbers

function divideTwoNumbers($number1,$number2){
    if($number2 == 0){
        echo "can not divide by zero";
        return;
    }
    echo $number1 / $number2;
    echo "<br>";

}

divideTwoNumbers($n1,$n2);

// devide two numbers

function multiplyTwoNumbers($number1,$number2){
    echo $number1 * $number2;
    echo "<br>";

}

multiplyTwoNumbers($n1,$n2);