<?php

function closestToZero(array $numbers)
{
    if(count($numbers) === 0){
        return 0;
    }

    $result = current($numbers);
    foreach ($numbers as $number) {
        $current = abs($number);
        $isCurrentPositive = $number>0;

        $bestChooseAbsolutValue = abs($result);

        if(
            $bestChooseAbsolutValue == $current
            && $isCurrentPositive
        ){
            $result = $number;
        }
        if ($result > $current) {
            $result = $number;
        }

    }

    return $result;
}


$numbers = [];
$result = closestToZero($numbers);
$input = var_export($numbers,true);
echo PHP_EOL . "For input values of `$input` the result is $result";
assert( $result ===0, 'Violation : For empty array result MUST BE 0');

$numbers = [
    7,
    -10,
    13,
    8,
    -1.7,
    1.7,
    4,
    -7.2,
    -12,
    -3.7,
    3.5,
    6.5,
    -6.2,
    7
];

$result = closestToZero($numbers);

$input = var_export($numbers,true);
echo PHP_EOL . "For input values of `$input` the result is $result";

assert( $result ===1.7, 'Violation : For given numbers set result MUST BE 1.7');
