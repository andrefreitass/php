<?php

require __DIR__.'/session.php';

$user = $_SESSION['user'] ?? null;

if (!$user) {
    header('location: login.php');
    exit;
}
?>

<h1> Pagina protegida </h1>

<p>Ola, <?php echo $user['email'];?></p>