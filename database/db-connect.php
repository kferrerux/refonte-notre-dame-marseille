<?php

try {
    // CONNEXION A LA BASE DE DONNEES
    $db = new PDO("mysql:host=localhost; dbname=notredamedelagarde", "root", "EdenManon.");
    echo "Connexion reussie !";
} catch (PDOException $e) {
    echo $e->getMessage();
}
    // $db = new PDO('mysql:host=db5015488948.hosting-data.io;dbname=dbs12655734;charset=utf8', 'dbu5570741', 'EdenManon.');
