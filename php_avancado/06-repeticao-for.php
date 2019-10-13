<?php

// $numero = 5;

// for ($i=0; $i <= 10 ; $i++) { 
//     echo $numero . "x" . $i . "=" . $numero * $i . "<br>";
// }

$frutas = [
    "banana",
    "maca",
    "melancia",
    "laranja",
    "melao",
    "nova Fruta"
];

for ($i=0; $i < count($frutas); $i++) { 
    echo $frutas[$i] . "<br>"; 
}