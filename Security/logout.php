<?php

session_start();

//dump($_SESSION["security"]);


if (isset($_SESSION["security"])) {
    unset($_SESSION["security"]);
}

header('location: /');
exit();