<?php
include('dbcon.php');
$ref_table = "sales";
$fetchdata = $database->getReference($ref_table);
print_r($fetchdata->getValue("sales"));
?>