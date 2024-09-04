<?php
include ('../connection.php');
header('Content-type:application/json');
$p_bottel=$_POST['p_bottel'];
$p_injection=$_POST['p_injection'];
$p_medicine=$_POST['p_medicine'];
$p_serup=$_POST['serup'];

$query="UPDATE `medicine_price` SET `p_bottel`='$p_bottel',`p_injection`='$p_injection',`p_medicine`='$p_medicine',`p_serup`='$p_serup''WHERE `id`='$id'";
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