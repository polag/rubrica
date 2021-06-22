<?php
include __DIR__.'/FormHandle.php';
include __DIR__.'/Rubrica.php';
require __DIR__ . '/util.php';
\DataHandling\Rubrica::deleteData($_GET['id']);
