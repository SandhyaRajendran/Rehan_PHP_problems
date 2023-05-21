<?php
//this is for i push all the input values
$allval = [];
//here i count the operators 
$operatorsount = array(
    "add"=> "0",
    "sub"=> "0",
    "mul"=> "0",
);
//i push all the input values by separating it by operator vice.
$allArray["add"] = [];
$allArray["sub"] = [];
$allArray["mul"] = [];
//here i looped all the values for getting the input from the user
for ($j=0; $j < 3; $j++) { 
$firstValue = (int)readline("Enter your first value: ");
$secondValue = (int)readline('Enter your second value: '); 
$operator = (string)readline('Choose operand (+,-,*): ');
$results = "";

    switch ($operator) {
        case '+':
        $results = $firstValue + $secondValue;
        $operatorsount['add']++;
        array_push($allArray["add"],["f"=>$firstValue,"o"=>$operator,"s"=>$secondValue,"r"=>$results]);
        break;

        case '-':
        $results = $firstValue - $secondValue;
        $operatorsount['sub'] += 1;
        array_push($allArray["sub"],["f"=>$firstValue,"o"=>$operator,"s"=>$secondValue,"r"=>$results]);
        break;

        case '*':
        $results = $firstValue * $secondValue;
        $operatorsount['mul'] += 1;
        array_push($allArray["mul"],["f"=>$firstValue,"o"=>$operator,"s"=>$secondValue,"r"=>$results]);
        break;

        default:
        ECHO "ERRROR";
        break;
    }

array_push($allval,$firstValue." ".$operator." ".$secondValue."  = ".$results);
//here i print all the inputs from the every single entry
print_r($allval);
}
//here i output the how many times the operators will be used by the user
print_r($allArray);
//here i output all the count of the value
print_r($operatorsount);