<?php
$values = [1,4,2,5];
$storedValues = [];
for($i=0; $i<count($values)-1; $i++){

    if($values[$i] >= $values[$i+1]){
        array_push($storedValues, $values[$i]);
    }
    else{
        $a = $values[$i];
        $b = $values[$i+1];
        $values[$i] = $b;
        $values[$i+1] = $a;
    }
    array_push($storedValues, $values);
}
print_r($storedValues);
