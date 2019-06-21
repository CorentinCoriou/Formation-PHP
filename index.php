<?php

session_start();
include './includes/usersDAO.php';
$errorLogin=false;

$RequestURI= $_SERVER["REQUEST_URI"] === "/index.php" ? "/index.php/" : $_SERVER["REQUEST_URI"];
$routes = [
    "/index.php/" => [
          "uri" => "/index.php/",
          "authorised" => "ANONIMOUS",
          "resource" => "home"
    ],
    "/index.php/Security/change" => [
        "uri" => "/index.php/Security/change",
        "authorised" => "Security",
        "resource" => "change"
    ],
    "/index.php/admin/" => [
        "uri" => "/index.php/Security/change",
        "authorised" => "Security",
        "resource" => "change"
    ]
];

    $currentRoute = $routes[$_SERVER["REQUEST_URI"]];
    //dump($currentRoute);
    //dump($routes);

if (isset($_SESSION) && isset($_SESSION["flashbag"]["error"]) && isset($_SESSION["flashbag"]["error"]["login"])){
    $errorLogin = $_SESSION["flashbag"]["error"]["login"];
};


?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>

<?php
require_once "views/" . $currentRoute['resource'] . ".php";
 ?>

</body>
</html>
