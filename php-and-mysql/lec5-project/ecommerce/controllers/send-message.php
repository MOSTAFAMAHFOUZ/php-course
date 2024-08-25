<?php 
require_once ROOT_PATH."src/validations.php";
// validate 

// request 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = sanitize('name');
    $email = sanitize('email');
    $subject = sanitize('subject');
    $content = sanitize('content');


    // validations 
    if(required($name)){
        $errors["name"] = 'name is required';
    }elseif(minLength($name,3)){
        $errors["name"] = 'name should be at least 3 characters long';
    }elseif(maxLength($name , 25)){
        $errors["name"] = 'name should not be more than 25 characters long';
    }




    if(required($subject)){
        $errors["subject"] = 'subject is required';
    }elseif(minLength($subject,3)){
        $errors["subject"] = 'subject should be at least 3 characters long';
    }elseif(maxLength($subject , 25)){
        $errors["subject"] = 'subject should not be more than 25 characters long';
    }


    if(required($email)){
        $errors["email"] = 'email is required';
    }elseif(email($email)){
        $errors["email"] = 'please enter a valid email';
    }

    if(required($content)){
        $errors["content"] = 'content is required';
    }elseif(minLength($content,10)){
        $errors["content"] = 'content should be at least 3 characters long';
    }elseif(maxLength($content , 200)){
        $errors["content"] = 'content should not be more than 200 characters long';
    }





    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
    }else{

        $sql = "INSERT INTO `messages`(`name`,`email`,`subject`,`content`) 
        VALUES('$name', '$email', '$subject', '$content')";
        
        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = 'Your message has been sent successfully';
        }
    }

    redirect("contact");
}
