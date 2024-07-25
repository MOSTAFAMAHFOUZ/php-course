<?php 


// super global variables 

// server 

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// echo $_GET['id'];
// echo "<br>";
// echo $_GET['name'];
// echo $_SERVER['QUERY_STRING'];

// if(isset($_GET['number1'])){
    
//     switch($_GET['operator']){
//         case 'plu':
//             $result =  $_GET['number1'] + $_GET['number2'];
//             break;
//         case 'sub':
//             $result =  $_GET['number1'] - $_GET['number2'];
//             break;
//         case 'mul':
//             $result =  $_GET['number1'] * $_GET['number2'];
//             break;
//         case 'div':
//             if($_GET['number2']!=0){
//                 $result =  $_GET['number1'] / $_GET['number2'];
//             }else{
//                 $result =  "Error: Division by zero";
//             }
//             break;
//         default:
//             $result =  "Invalid operator";
//             break;
//     }
// }


if(isset($_POST['number1'])){
    
    switch($_POST['operator']){
        case 'plu':
            $result =  $_POST['number1'] + $_POST['number2'];
            break;
        case 'sub':
            $result =  $_POST['number1'] - $_POST['number2'];
            break;
        case 'mul':
            $result =  $_POST['number1'] * $_POST['number2'];
            break;
        case 'div':
            if($_POST['number2']!=0){
                $result =  $_POST['number1'] / $_POST['number2'];
            }else{
                $result =  "Error: Division by zero";
            }
            break;
        default:
            $result =  "Invalid operator";
            break;
    }
}





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
    <h1>Hello, Server!</h1>

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto border p-3">
                <form action="" method="POST">
                    <?php if(isset($result)): ?>
                        <h2> <?php echo $result; ?></h2>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="">Number1</label>
                        <input type="text" name="number1" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Number2</label>
                        <input type="text" name="number2" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Operator</label>
                        <select name="operator" id="" class="form-control" id="">
                            <option value="plu">+</option>
                            <option value="sub">-</option>
                            <option value="mul">*</option>
                            <option value="div">/</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" Value="Send" id="" class="form-control bg-success">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- <table class="table">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php /* foreach($_SERVER as $key => $value): ?>
            <tr>
                <td> <?= $key; ?> </td>
                <td> <?= $value; ?> </td>
            </tr>
            <?php endforeach; */ ?>
        </tbody>
    </table> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
