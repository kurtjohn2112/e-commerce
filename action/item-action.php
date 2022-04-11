<?php 
include '../classes/Market.php';
$obj = new Market;
// print_r($_POST);

// this data comes from the html-form
$name = $_POST['item-name'];
$price = $_POST['item-price'];
$desc = $_POST['item-desc'];
$btn = $_POST['btn_add'];


    $obj->store($name,$price,$desc);




// echo "<pre>";
// print_r($obj->show());
// echo "</pre>";
?>