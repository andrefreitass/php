<?php

//empty verifica se o campo esta vazio; validacoes "", 0, null, false, array()
//trim retira espaco do inicio e do final da string
//strip_tags em texto area nao executa scripts javaScrit

$nome = trim($_POST["nome"]);
$interesses = $_POST["interesse"] ?? null;
$mensagem = strip_tags($_POST["mensagem"]);



if(empty($nome)){
    echo "Informe o nome <br>";
}

if(is_null($interesses)){
    echo "Selecione um item na opcao interesse <br>";
}

echo $mensagem;