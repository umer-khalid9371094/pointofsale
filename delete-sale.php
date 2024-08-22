<?php
include('dbcon.php');
$id = $_GET['id'];
$ref_table = 'sales/'.$id;
$deleteData = $database->getReference($ref_table)->remove();

?>