<?php 


$age = 30;


$text = "Lorem ipsum,  dolor  sit amet478 consectetur   adipisicing elit. Omnis necessitatibus voluptas voluptatem nulla accusantium  delectus ducimus dolore aut laborum non!";

// echo strlen($text);
// echo str_word_count($text);
// echo strtoupper($text);
// $flag =  strpos($text,"Lorem");
// $flag = str_contains($text,"Lorem");
// $new_text = str_replace("amet478","eraasoft",$text);
// $substring = substr($text,10,10);
// echo $substring;
// echo str_repeat("hamada<br>",10);



// if($flag){
//     echo "enter";
// }else{
//     echo "Not Found";
// }



// echo $text;





$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tenetur assumenda veniam doloribus nostrum beatae nisi saepe quis ad delectus quia animi velit quaerat commodi iste soluta similique, nulla placeat.";

// string length 
// $length = strlen($text);
// $new_text = str_replace("nostrum","eraasoft",$text);
// $new_sentence = str_repeat("g23",5);
// $new_text = $new_sentence . $new_text;
// $split_string = substr($new_text,50);
// // echo strlen($split_string);
// echo strpos($new_text,"quis");
// // echo $new_text;


$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nihil.";

function split_string($string){
    $word_count = str_word_count($string);
    if($word_count>20){
        $string_length = strlen($string);
        $first_text = substr($string,0,$string_length/2);
        $second_string = substr($string,$string_length/2);
        echo $first_text;
        echo "<br>";
        echo $second_string;
    }else{
        echo "string length is less than 20 words";
    }
}


split_string($text);



/**
 * 
 * get the length
 * replace (nostrum) with (eraasoft)
 * repeat this word (g23) ( 5 times ) and add the result at the bigining of the string
 * split first 50 characters into new variable 
 * get the count of the last varible characters
 * get position of (quis) 
 * 
 * */ 