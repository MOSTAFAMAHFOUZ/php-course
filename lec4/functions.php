<?php 
declare(strict_types=1);
// daynamicly typed language

// function sum($x,$y,$f,$z=30,$g=20) {
//     return $x + $y + $f + $z + $g;
// }
// echo sum(y:10,x:30,f:20);


// $result = fn($number1,$number2) => $number1 + $number2;
// echo sum(10.5,30);
// echo $result(10.5,30);


// return 

// function sum($number1 = 30,$number2 = 50){
//     return $number1 + $number2;
// }




// echo sum();


// $typeName = function($name){
//     return "hello : $name";
// };
// echo $typeName("hamada");
// echo typeName("hamada");








// function addNumbers(&$number1,$number2){
//     $number1 = 50;
//     return $number1 + $number2;
// }



// $n1 = 100;
// $n2 = 60;
// echo addNumbers($n1,$n2);
// echo "<br>";
// echo $n1;



$x = 30;

function increment() {
    global $x;
    $x = 100;
    echo $x;
//   global $x;
//   $x = 70;
//   return $x + 1;
}


echo increment();
echo "<br>";
echo $x;








