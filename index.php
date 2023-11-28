<?php
// controllo password
$pwInput=readline('Inserisci la password: ');
//password più lunga di 8 caratteri
function lengthPassword($string){
    if(strlen($string)>=8){
        return true;
    } else {
        return false;
    }
}
//password con almeno una maiuscola
$capitalCheck=false;
function capitalPassword($string){
    for($i=0;$i<strlen($string);$i++){
        if(ctype_upper($string[$i])){
            return true;
        }
    }
    return false;
}
//password con almeno un numero
$numberCheck=false;
function numberPassword($string){
    for($i=0;$i<strlen($string);$i++){
        if(is_numeric($string[$i])){
            return true;
        }
    }
    return false;
}
//caratteri speciali
$specialCheck=false;
function specialPassword($string){
    $specialAdmitted=["!","?","$","&"];
    for($i=0;$i<strlen($string);$i++){
        if(in_array($string[$i],$specialAdmitted)){
            return true;
        }
    }
    return false;
}
// controllo completo
function passwordCheckTot($string){
    $lenghCheck=lengthPassword($string);
    $numberCheck=numberPassword($string);
    $capitalCheck=capitalPassword($string);
    $specialCheck=specialPassword($string);
    if($lenghCheck&&$capitalCheck&&$numberCheck&&$specialCheck){
       echo "La password è corretta!\n";
    } else {
        if(!$lenghCheck){
            echo "Password troppo corta\n";
        }
        if(!$numberCheck){
            echo "Manca un numero!\n";
        }
        if(!$capitalCheck){
            echo "Manca una maiuscola\n";
        }
        if(!$specialCheck){
            echo "Manca un carattere speciale!";
        }
    }
}
passwordCheckTot($pwInput);