<?php
// conditions	// conditions
// all the numbers in the array will be >= -1 <= 100	// all the numbers in the array will be >= -1 <= 100
// in each array there will be >= 1 <=2 , -1 values	// in each array there will be >= 1 <=2 , -1 values
// only maximum of 5 elements can be present in the array	// only maximum of 5 elements can be present in the array
$array = [	$array = [
    [12, -1, 1, 1, -1], // => 2	    [12, -1, 1, 1, -1], // => 2
    [12, -1, 66, 4, 0], // => 70	    [12, -1, 66, 4, 0], // => 70
    [12, 0, 66, 76, -1], // => 0	    [12, 0, 66, 76, -1], // => 0
    [-1, 1, 2, 3, 4], // => 10	    [-1, 1, 2, 3, 4], // => 10
    [56, -1, 66, -1, 67], // => 66	    [56, -1, 66, -1, 67], // => 66
]];


// print the index which has the maximum sum between each 1s => 1	// print the index which has the maximum sum between each 1s => 1
// print the array with all the sum values => [2, 70, 0, 10, 66]	// print the array with all the sum values => [2, 70, 0, 10, 66]


$allSums = [];
for ($m = 0; $m <= count($array) - 1; $m++) {
    $found = false;
    $sum = 0;
    for ($i = 0; $i <= count($array[$m]) -1 ; $i++) {
        if ($found) {
            if ($array[$m][$i] === -1) {
                $found = false;
                break;
            } else {
                $sum += $array[$m][$i];
            }
        }

        if ($array[$m][$i] === -1) {
            $found = true;
        }
    }
    $allSums[] = $sum;
}

print_r("The index with maximum sum is ". (array_keys($allSums, max($allSums))[0]));
echo "\n";
print_r($allSums);

//max($allSums) => 70
//array_keys
//print_r(array_keys($allSums,))[0];


//var_dump(array_key_exists($allSums[$i]));
//

//
//$dummy = [1, -1, 1, -1, 1];
//$found = false;
//$sum = 0;
//for ($i = 0; $i <= count($dummy) -1 ; $i++) {
//
//    if ($found) {
//        if ($dummy[$i] === -1) {
//            $found = false;
//            break;
//        } else {
//            $sum += $dummy[$i];
//        }
//    }
//
//    if ($dummy[$i] === -1) {
//        $found = true;
//    }
//}
//print_r($sum);
