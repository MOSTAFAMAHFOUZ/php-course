<?php 
date_default_timezone_set('Africa/Cairo');

// // $date =  time() + 2 * 24 * 60 * 60;
// // $date = strtotime("2024-08-10");
// $date = strtotime("first day of this month");
// // echo $date;
// echo date("Y/M/D h:i:s",$date);




function typeTheTime($numberOfDays){

    // $time = time() + $numberOfDays * 24 * 60 * 60;
    $time = strtotime("+ $numberOfDays day");
    echo date("Y/m/d h:i:s", $time);
}


typeTheTime(2);