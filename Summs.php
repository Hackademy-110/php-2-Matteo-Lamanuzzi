<?php
//somme usando for, foreach e array_reduce()

$arrStart=[1,8,1,1,1,13,1,6,1,6,5,6,1,1,13,4,18,8,4,6,1,31,5,6,5,8,15,6];

//Usando for
function sumViaFor($arr){
    $sum=0;
for($i=0;$i<count($arr);$i++){
    $sum+=$arr[$i];
}
return $sum;
}
echo sumViaFor($arrStart)."\n";

//Usando foreach
function sumViaForeach($arr){
    $tot=0;
foreach($arr as $single){
    $tot+=$single;
}
return $tot;
}
echo sumViaForeach($arrStart)."\n";
// usando array_reduce
function sumViaArrReduce($arr){
    $tot=array_reduce($arr,function($acc,$single){
        $acc+=$single;
        return $acc;
    });
    return $tot;
};
echo sumViaArrReduce($arrStart)."\n";