<?php 
include(__DIR__.'/vendor/autoload.php');
use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('point-of-sale-f2bc9-firebase-adminsdk-bepo0-dd806a7a2d.json')->withProjectId('point-of-sale-f2bc9')->withDatabaseUri('https://point-of-sale-f2bc9-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
?>