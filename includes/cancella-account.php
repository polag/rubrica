<?php
include_once __DIR__ . '/globals.php';
include_once __DIR__ . '/Utenti.php';

\DataHandling\Utenti::deleteUser($_SESSION['userId']);
