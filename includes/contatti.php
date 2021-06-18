<?php
include './Rubrica.php';
$contactId  = $_GET['id'];
if(isset($contactId)){
    
    Rubrica::update_data($_POST, $_GET['id']);
}else{
    
    Rubrica::insert_data($_POST);
}
