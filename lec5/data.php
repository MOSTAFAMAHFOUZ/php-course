<?php 

$users = '[
  {
    "id": 1,
    "name": "Leanne Graham",
    "username": "Bret",
    "email": "Sincere@april.biz",
    "address": {
      "street": "Kulas Light",
      "suite": "Apt. 556",
      "city": "Gwenborough",
      "zipcode": "92998-3874"
    }
  },
  {
    "id": 2,
    "name": "Ervin Howell",
    "username": "Antonette",
    "email": "Shanna@melissa.tv",
    "address": {
      "street": "Victor Plains",
      "suite": "Suite 879",
      "city": "Wisokyburgh",
      "zipcode": "90566-7771"
    }
  }
]';



$json_users = json_decode($users, true);
$new_users = json_encode($json_users);
dd($new_users);

// foreach($json_users as $user){
//     echo "id : ". $user['id'] . " - name :". $user['name'] . "<br/>";
// }




function dd($data){
    echo "<pre>";
        print_r($data);
    echo "</pre>";
    die;
}