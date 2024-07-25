<?php 


$colors = ["red", "green", "blue","yellow","black","brown"]; 
$names = ["ali","ahmed"];


foreach($names as $name){
    $colors[] = $name;
}

echo "<pre>"   ;
print_r($colors);
echo "</pre>";

die;

$new_array = array_reverse($colors);
// add -- array push
// array_pop($colors);
// array_shift($colors);
// array_unshift($colors,"orange");
// echo end($colors);
// echo is_array($colors);
// echo in_array("blueasdfasdf",$colors);

// $new_array = array_reverse($colors);
// $new_array = array_chunk($colors,5);
// $new_array = array_merge($colors,$names);

// echo implode("---",$colors);





// die;

// for($i=0; $i < count($colors); $i++){
//     echo $colors[$i] . "<br>";
// }

// $numbers = [1,2,3,4,5,6,7,8,9,10];
// array_push($numbers,11,12);

// $new_numbers = [];
// foreach($numbers as $number){
//     if($number % 2 != 0){
//         $new_numbers[] = $number;
//         echo $number . "<br>";
//     }
// }




$products = [
    ["TV", 150],
    ["Radio", 100],
    ["Air Condition", 200],
    ["Mobile", 300],
    ["Microwave", 500],

];

// foreach($products as $product){
//     echo $product[0] . " --- " . $product[1] . "<br>";
// }


$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


// echo array_key_exists("Egypt",$ceu);

die;
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello Array!</h1>

    <ul>
        <?php foreach($colors as $color): ?>
            <li><?= $color; ?> </li>
        <?php endforeach; ?>
        
    </ul>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Key</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $key => $product): ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $product[0]; ?></td>
                <td><?= $product[1]; ?> $</td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <hr>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Country</th>
                <th>Capital</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach($ceu as $key => $value): ?>
            <tr>
                <td> <?php echo $key; ?></td>
                <td> <?php echo $value; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>