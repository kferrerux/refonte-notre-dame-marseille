<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=notredamedelagarde;charset=utf8', 'root', 'EdenManon.');
} catch (Exception $e) {
    echo

    die('Erreur : ' . $e->getMessage());
}
