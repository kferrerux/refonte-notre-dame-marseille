<?php

// INITIALISATION DE LA SESSION
session_start();

// ON VIDE TOUTES LES VARIABLES DE SESSION
$_SESSION = array();

// ON DETRUIT LA SESSION
session_destroy();

header('Location: ../pages/index.php');
