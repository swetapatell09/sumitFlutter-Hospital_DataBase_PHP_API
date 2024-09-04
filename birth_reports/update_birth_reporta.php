<?php
include ('../connection.php');
header('Content-type:application/json');
$babyname=$_POST['babyname'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$time=$_POST['time'];
$hospitaldetails=$_POST['hospitaldetails'];
$doctorname=$_POST['doctorname'];
$nursename=$_POST['username'];
$username=$_POST['username'];
$fathername=$_POST['fathername'];
$babyweight=$_POST['babyweight'];

$query="UPDATE `birth_reports` SET `babyname`='$babyname',`gender`='$gender',`date`='$date',`time`='$time',`hospitaldetails`='$hospitaldetails',`doctorname`='$doctorname',`nursename`='$nursename',`username`='$username',`fathername`='$fathername',`babyweight`='$babyweight''WHERE `id`='$id'";
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