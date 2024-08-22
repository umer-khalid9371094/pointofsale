<?php
include('dbcon.php');
$id = $_GET['id'];
$ref_table = 'sales';
$reference = $database->getReference($ref_table)->getChild($id)->getValue();
?>