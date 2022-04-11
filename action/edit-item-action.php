<?php 
include '../classes/Market.php';
$obj = new Market;

$name = $_POST['item-name'];
$price = $_POST['item-price'];
$desc = $_POST['item-desc'];
$item_id = $_POST['item-id'];

// print_r($_POST);

$obj->edit($item_id,$name,$price,$desc);



  



?>