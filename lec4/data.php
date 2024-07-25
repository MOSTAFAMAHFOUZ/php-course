<?php 
// functions 
/**
 * count
 * array_push()
 * array_pop()
 * array_shift()
 * array_unshift()
 * array_slice()
 * is_array()
 * end()
 * in_array()
 * array_reverse()
 * array_merge()
 * array_key_exists()
 * array_chunk()
 */


$colors = ["red", "green", "blue", "black", "white"];

$products = ["TV","Radio","Air Condition","Mobile","Microwave"];

$products = [
    ["TV", 150],
    ["Radio", 100],
    ["Air Condition", 200],
    ["Mobile", 300],
    ["Microwave", 500],

];

$students = [
    "10"=>[
        "name"=>"mostafa ali",
        "grade"=>90,
        "subjects"=>["dart","flutter","java"],
        "department"=>"mobile"
    ],
    "11"=>[
        "name"=>"aya ahmed",
        "grade"=>80,
        "subjects"=>["math", "english", "php","javascript","html"],
        "department"=>"web"
    ],
    "12"=>[
        "name"=>"shager dosoky",
        "grade"=>75,
        "subjects"=>["math", "english", "science","python"],
        "department"=>"ai"
    ],
    "13"=>[
        "name"=>"mohamed ebraheem",
        "grade"=>95,
        "subjects"=>["math", "english", "php","javascript","html","css","sass"],
        "department"=>"web"
    ],
    "14"=>[
        "name"=>"noha esmail",
        "grade"=>70,
        "subjects"=>["machine learning","python","deep learning"],
        "department"=>"ai"
    ],
];






$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


/* Write a PHP script that inserts a new item in an array in any position.
    Expected Output :
    Original array : 
    1 2 3 4 5 
    After inserting '$' the array is :
    1 2 3 $ 4 5
*/


function getNumber(){
    sleep(3);

    echo "Done";
    return 3;
}


if(getNumber()==1){
    echo "Number is 1";
}else if(getNumber()==2){
    echo "Number is 2";
}else if(getNumber()==3){
    echo "Number is 3";
}



$numbers = [1,2,3,4,5,6,7,8,9,10];
// extract even numbers from the array