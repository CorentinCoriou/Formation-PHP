<?php

session_start();
include_once '../includes/pdo.php';
//echo"test d'appel";

if ($_SERVER["REQUEST_METHOD"] !== "POST" || (empty($_POST) || $_POST["email"] == "" || $_POST["pass"] == "")){
    header('location: /');
    exit();
}

//if (empty($_POST) || $_POST["email"] !== "" || $_POST["pass"] !== ""){
  //  header('location: /');
//}

//dump($_POST);

$email = $_POST["email"];
$pass = $_POST["pass"];
$query = $db->query("SELECT * FROM user WHERE email='". $email . "'");

$user = $query->fetch($db::FETCH_ASSOC);

//dump($dbpass);

if (!password_verify($pass, $user["pass"])){
    $_SESSION["flashbag"] = ["error"=>["login" => $email]];
    //dump($_SESSION);
    header('location: /');
    exit();
};

$_SESSION["security"] = $user;
header('location: ' . $_SERVER["HTTP_REFERER"]);
exit();

