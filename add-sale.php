<?php
include("dbcon.php");

// if(isset($_POST['button_name'])){
    $name = 'name';//$_POST['name'];
    $email = 'email';//$_POST['email'];
    $pass = 'pass';//$_POST['pass'];

    $postData = [
        'name'=>$name,
        'email'=>$email,
        'pass'=>$pass,
    ];

    $refTable = 'sales';
    $postRef = $database->getReference($refTable)->push($postData);
    if($postRef){
        echo "Data Inserted Successfully";
        // $_SESSION['status'] = "Data Inserted Successfully";
    }else{
        echo "Data Not Inserted";
        // $_SESSION['status'] = "Data Not Inserted";
    }
// }
?>