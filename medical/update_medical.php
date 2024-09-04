<?php
include ('../connection.php');
header('Content-type:application/json');
$mcompany=$_POST['mcompany'];
$mname=$_POST['mname'];
$mtypes=$_POST['mtypes'];
$mprice=$_POST['mprice'];

$query="UPDATE `medical` SET `mname`='$mname',`mcompany`='$mcompany',`mtypes`='$mtypes',`mprice`='$mprice''WHERE `id`='$id'";
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