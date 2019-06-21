<?php

echo "Bonjour Maître comment puis-je te servir ???";
echo"<br><br>";
//echo password_hash('Cloyes', PASSWORD_DEFAULT);
echo"<br><br>";
session_start();

//$_SESSION["test"] = "Moi";

require_once "includes/pdo.php";
$query = $db->query("SELECT * FROM user WHERE  id = 1");
$_SESSION["user"] = $query->fetch($db::FETCH_ASSOC);

dump($_SESSION);

