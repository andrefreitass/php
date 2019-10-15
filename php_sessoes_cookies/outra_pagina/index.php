<?php
//leitura de cookie
    // var_dump($_COOKIE["meuNome"]);
    //  var_dump(session_save_path(__DIR__.'.\sessions'));

session_start();

var_dump($_SESSION["usuario"]);


