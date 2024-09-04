<?php
include ('../connection.php');
header('Content-type:application/json');
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$disease=$_POST['disease'];
$surgery=$_POST['surgery'];
$doctorname=$_POST['doctorname'];
$nursename=$_POST['nursename'];
$deathtime=$_POST['deathtime'];
$deathdate=$_POST['deathdate'];
$hospitaldetails=$_POST['hospitaldetails'];


$query="UPDATE `death_reports` SET `name`='$name',`age`='$age',`gender`='$gender',`disease`='$disease',`surgery`='$surgery',`hospitaldetails`='$hospitaldetails',`doctorname`='$doctorname',`nursename`='$nursename',`deathdate`='$deathdate',`deathtime`='$deathtime''WHERE `id`='$id'";
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