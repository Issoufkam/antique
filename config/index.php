<?php

$host = "localhost";
$user = "issouf";
$pm = "root";


try {
    $connect = new PDO("mysql:host=$host;dbname=quai", $user, $pm);

} catch (PDOException $th) {
    echo 'Echec de la connexion : ' .$e->getMessage();
}


?>