<?php

    $mediaGeral = 7;
    $frequenciaGeral = 75;

    $mediaAluno = 3;
    $frequenciaAluno = 10;

    //Comparativo E
    if($mediaAluno >= $mediaGeral && $frequenciaAluno >= $frequenciaGeral){
        echo "Aluno Aprovado!";
    } else {
        echo "Aluno Reprovado!";
    }

    echo "\n";
    
    //Comparativo OU

    if($mediaAluno >= $mediaGeral || $frequenciaAluno >= $frequenciaGeral){
        echo "Aluno Aprovado!";
    } else {
        echo "Aluno Reprovado!";
    }

    //Negacao
    $chovendo = true;

    if (!$chovendo){
        echo "Vou parar o Bar";
    } else {
        echo "Fico em casa!";
    }
    
