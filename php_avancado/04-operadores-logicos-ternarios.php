<?php

$mediaGeral = 7;
$mediaRecuperacao = 5;
$frequenciaGeral = 70;

$mediaAluno = 7;
$frequenciaAluno = 70;

$reprovadoFalta = $frequenciaAluno < $frequenciaGeral ? true : false;


if (!$reprovadoFalta){
    if($mediaAluno < $mediaRecuperacao){
        echo "Reprovado";    
    } else if($mediaAluno < $mediaGeral){
        echo "Recuperacao";    
    } else {
        echo "Aprovado";    
    }
} else{
    echo "Reprovado pro Falta!";
}