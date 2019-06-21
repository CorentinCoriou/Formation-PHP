<?php
$users = [
    [
        "id" => 1,
        "nom" => "coriou",
        "prenom" =>"corentin",
        "email" => "corentin.coriou@sfr.com",
        "pass" => "cloyes"
    ],
    [
        "id" => 2,
        "nom" => "mathieu",
        "prenom" =>"durand",
        "email" => "mathieu.durand@sfr.com",
        "pass" => "chartres"
    ],
    [
        "id" => 3,
        "nom" => "simon",
        "prenom" =>"amelia",
        "email" => "amelia.simon@sfr.com",
        "pass" => "maintenon"
    ]
];

$data = [
    [
        "id" => 2,
        "age" => 23,
        "pass" => "toto"
    ],
    [
        "id" => 1,
        "age" => 15,
        "pass" => "cloyes"
    ],
    [
        "id" => 3,
        "age" => 35,
        "pass" => "chartres"
    ]
];

foreach ($users as $key => $user){

    foreach ($data as $datas)
        if ($datas["id"] === $user["id"]){
            $users[$key] = array_merge($user, $datas);
        }
}
//dump($_POST);

setcookie("test", "test de Cookie");
unset($_COOKIE["test"]);

?>