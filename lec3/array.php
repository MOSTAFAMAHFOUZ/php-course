<?php 
    //       0      1      2
// $colors = ["red","green","black",true,null,20];   // indexed array 

$student = [
    "name" => "mostafa",
    "email" => "mostafa@gmail.com",
    "phone" => "01021023255",
    "gender" => "male",
    "subjects"=> ["PHP","JAVA","C#","C++","RUBY"]
];

foreach($student as $key => $value){

    if(is_array($value)){
 echo "$key : " ;
        foreach($value as $val){
            echo  $val . " , ";
        }
    }else{

        echo $key . " : " . $value . "<br>";
    }
}

// echo $student["email"];

// $programming_languages = ["PHP","JAVA","C#","C++","RUBY"];
// echo count($programming_languages);
// $count = count($programming_languages);
// for($i = 0; $i < $count; $i++){
//     echo $programming_languages[$i];
//     echo "<br>";
// }
// echo $programming_languages[0];
// echo "<br>";
// echo $programming_languages[1];
// echo "<br>";

// echo $programming_languages[2];
// echo "<br>";

// echo $programming_languages[3];
// echo "<br>";

// echo $programming_languages[4];
// echo "<br>";
