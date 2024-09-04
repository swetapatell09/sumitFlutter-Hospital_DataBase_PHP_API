<?php
include ('../connection.php');
header('Content-type:application/json');
$medicine_type=$_POST['medicine_type'];

$query="UPDATE `medicine_types` SET `medicine_type`='$medicine_type''WHERE `id`='$id'";
$res = mysqli_query($con,$query);
if($res)
{
    $msg=array('status'=>"ok",'message'=>"success");
    echo json_encode($msg,JSON_PRETTY_PRINT);
    http_response_code(200);
}
else
{
    $msg=array('status'=>"failed",'message'=>"failed");
    echo json_encode($msg,JSON_PRETTY_PRINT);
    http_response_code(400);
}
?>