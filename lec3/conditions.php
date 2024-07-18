<?php 

// if , if else 

// ternary perator 

$num = 9;

// if($num > 10){
//     echo "Number is greater than 10";
// }else {
//     echo "Number is less than or equal to 10";
// }

// null coalescing operator 
// match vs switch 

$result = $num > 10 ? "Number is greater than 10" : "Number is less than or equal to 10";

echo $result;
// $color = "blue";

// switch($color){

//     case "red":
//     case "blue":
//         echo "Color is blue or red";
//         echo "<br>";
//         break;
//     case "green":
//         echo "Color is green";
//         echo "<br>";
//         break;
//     default:
//         echo "Color is not found";

// }


// $name = "mohamed";
// // echo rand(0,strlen($name)-1);
// // echo $name[6];




// $operators = "+-/*";
// $number1 = rand(5,10);
// $number2 = rand(5,10);

// $operator = rand(0,strlen($operators)-1);
// $op = $operators[$operator];
// echo $number1 . " : " . $number2;
// echo "<br>";

// echo "operator is " . $op;
// echo "<br>";
// // echo $operators[$operator];
// switch($op){
//     case "+":
//         echo $number1 + $number2;
//         break;
//     case "-":
//         echo $number1 - $number2;
//         break;
//     case "/":
//         echo $number1 / $number2;
//         break;
//     case "*":
//         echo $number1 * $number2;
//         break;
//     default:
//         echo "Invalid operator";
// }



// * / - +






// function getGrade($degree){

//     if($degree >= 85 && $degree <=100){
//         echo "Grade: A";
//     }else if($degree < 85 && $degree >= 75){
//         echo "Grade: B";
//     }else if ($degree < 75 && $degree >=65){
//         echo "Grade: C";
//     }else if ($degree <65 && $degree >=50){
//         echo "Grade: D";
//     }else{
//         echo "you are fired";
//     }
// }

// $degree = rand(1,100);
// echo $degree . "<br>";
// getGrade($degree);