<?php

// $catsName = 'Meowsalot';
// echo "The name of the cat is $catsName and that is the truth."; Need double quotes for "template literal"


function doubleMe($x) {
    return $x * 2;
}

function tripleMe($x) {
    return $x * 3;
}

$ourCoolNumber = tripleMe(doubleMe(50));

if ($ourCoolNumber > 200) {
    echo 'The number is large enough.';
} else {
    echo 'The number is not large enough';
}