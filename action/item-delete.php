<?php 
include '../classes/Market.php';
$obj = new Market;


$item_id =  $_GET['id'];
$obj->destroy($item_id);

?>

<!-- 1. create update UI - done -->
    create update Action
2. create Update method