<?php
include __DIR__ . '/FormHandle.php';
include  __DIR__ . '/Rubrica.php';

$contactId  = $_GET['id'];
if (isset($contactId)) {
    \DataHandling\Rubrica::updateData($_POST, $_GET['id']);
} else {
    try {
        \DataHandling\Rubrica::insertData($_POST);
    } catch (Exception $e) {
        echo "Exception: ", $e->getMessage(), "\n";
    }
}
