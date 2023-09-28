<?php

$password = readline('Inserisci la password:');

$firstRule = false;
$secondRule = false;
$thirdRule = false;
$fourthRule = false;


function checkLength($passw){
    if(strlen($passw) >= 8){
        return true;
    }
    return false;
}

function checkNumber($passw){
    for($i = 0; $i < strlen($passw); $i++){
    if(is_numeric($passw[$i])){
        return true;
    }
}
return false;
}

function checkUpper($passw){
    for($i = 0; $i < strlen($passw); $i++){
    if(ctype_upper($passw[$i])){
        return true;
    }
}
return false;
}



function checkSpecial($passw){
    $specialChars = ["!", '@', '$', '%', '_', '+'];

    for($i = 0; $i < strlen($passw); $i++){
            if(in_array($passw[$i], $specialChars)){
                return true;
            }
        }
    return false;
}

function checkPassword(){
    $password = readline('Inserisci la password:');


$firstRule = checkLength($password);
$secondRule = checkNumber($password);
$thirdRule = checkUpper($password);
$fourthRule = checkSpecial($password);

    if($firstRule && $secondRule && $thirdRule && $fourthRule){
        echo 'Password inserita correttamente' . "\n";
        return true;
    } else {
        echo 'Butta male, riprova.' . "\n";
        return false;
    }
}

$passwordValid = false;
do{
   $passwordValid = checkPassword();
} while($passwordValid == false);

