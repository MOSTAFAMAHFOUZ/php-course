<?php 



function sanitize($input){
    return trim(htmlspecialchars($_POST[$input]));
}


function required($input){
    if(empty($input)){
        return true;
    }
    return false;
}

function minLength($input,$length){
    if(strlen($input) < $length){
        return true;
    }
    return false;
}

function maxLength($input,$length){
    if(strlen($input) > $length){
        return true;
    }
    return false;
}


function email($input){
    return !filter_var($input, FILTER_VALIDATE_EMAIL);
}