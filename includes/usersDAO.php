<?php

//require_once 'some-data.php';

include 'pdo.php';

//dump($users);
//$result = mysqli_query($connection, 'SELECT * FROM produit WHERE id = 3');
//dump(mysqli_fetch_all($result));
//dump(mysqli_fetch_assoc($result));
//$query = "SELECT * FROM produit";
//$q = $db->query($query);
//dump($q->fetchAll($db::FETCH_ASSOC));

//dump($_SERVER);die;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo " Je souhaite céer un user";

    $sql = "INSERT INTO user (nom, prenom, email, pass) VALUES (:nom, :prenom, :email, :pass)";

    $query = $db->prepare($sql);
    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('prenom', $_POST["prenom"]);
    $query->bindValue('email', $_POST["email"]);
    $query->bindValue('pass', password_hash($_POST["pass"], PASSWORD_BCRYPT));


    if (!$query->execute()) {
        dump($db->errorInfo());
        die("Veuillez contacter votre administrateur avec le code erreur ah ah ah");

    };
}

$query = $db->query("SELECT * FROM user");
$users = $query->fetchAll($db::FETCH_ASSOC);

