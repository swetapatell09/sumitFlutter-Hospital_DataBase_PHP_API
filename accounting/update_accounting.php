<?php
include ('../connection.php');
header('Content-type:application/json');
$transaction=$_POST['transaction'];
$date=$_POST['date'];
$time=$_POST['time'];
$cashpayment=$_POST['cashpayment'];
$epayment=$_POST['epayment'];

$query="UPDATE `accounting` SET `transaction`='$transaction',`date`='$date',`time`='$time',`cashpayment`='$cashpayment',`epayment`='$epayment''WHERE `id`='$id'";
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