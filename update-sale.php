<?php
include('dbcon.php');

if(isset($_POST['update_btn'])){
    $fname = $_PSOT['fname'];
    $fname1 = $_PSOT['fname1'];
    $fname2 = $_PSOT['fname2'];

    $updateData = [
        'fname' => $fname,
        'fname1' => $fname1,
        'fname2' => $fname2,
    ];
    $ref_table = "sales/".$id;
    $update_query = $database->getReference($ref_table)->update($updateData);

    if($update_query){
        $_SESSION['status'] = "Data Updated Successfully";
    }else{
        $_SESSION['status'] = "Data Not Updated";
    }

}
?>