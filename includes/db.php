<?php

$connection = mysqli_connect(
    'localhost',
    'formation',
    'PassPhp',
    'phpdeux'
);

if (!$connection) {
    die('<strong> Impossible de se connecter, veuillez revoir les accès</strong><br>'.mysqli_connect_error());
}else{
    echo "<strong> Connection établie à la base de  données</strong><br>";
}