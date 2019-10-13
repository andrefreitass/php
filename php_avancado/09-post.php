<?php

// var_dump($_POST);

$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$ondeConheceu = $_POST["ondeConheceu"];
$redirecionar = $_POST['redirecionar'];

echo "<strong>Nome:</strong> " .$nome . "<br>";
echo "<strong>Email:</strong> " .$email . "<br>";

echo "<strong>Interesses:</strong> " . "<br>";
echo "<ul>";
foreach ($interesses as $interesse) {
    echo  "<li>$interesse</li>";
}
echo "</ul>";

echo "<strong>Onde Conheceu:</strong> " .$ondeConheceu . "<br>";
echo "<strong>Redirecionar:</strong> " .$redirecionar . "<br>";
