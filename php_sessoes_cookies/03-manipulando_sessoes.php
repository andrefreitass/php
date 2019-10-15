<?php

session_start();

$_SESSION['usuario'] = [
    'name' => 'Teste',
    'idade' => 20,
    'ativo' => true,
    'rate' => 4.3
];

// UNSET APAGA VARIAVEIS
unset($_SESSION['usuario']);

//Posso sobreescrever os dados
$_SESSION['usuario'] = [
    'Altera dados'
];

