<?php
include("dbcon.php");


$input = file_get_contents("php://input");
if(isset($input['click_api'])){
    $entry_date = $input['EntryDate'];
    $customer_name = $input['CustomerName'];
    $customer_address = $input['CustomerAddress'];
    $customer_cell_no = $input['CustomerCellNo'];
    $postData = [
        'customer_name'=>$customer_name,
        'customer_address'=>$customer_address,
        'customer_cell_no'=>$customer_cell_no,
        'entry_date'=>$entry_date,
    ];

    $refTable = 'customers';
    $postRef = $database->getReference($refTable)->push($postData);
    if($postRef){
        // echo "Data Inserted Successfully";
        echo json_encode(array("status"=>1,"Message"=>"Data Inserted Successfully"));
        // $_SESSION['status'] = "Data Inserted Successfully";
    }else{
        echo json_encode(array("status"=>0,"Message"=>"Data Not Inserted"));
        // $_SESSION['status'] = "Data Not Inserted";
    }
}
