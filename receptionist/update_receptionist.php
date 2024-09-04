<?php
include ('../connection.php');
header('Content-type:application/json');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$experience=$_POST['experience'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$image=$_POST['image'];

$query="UPDATE `receptionist` SET `name`='$name',`mobile`='$mobile',`email`='$email',`password`='$password',`experience`='$experience',`age`='$age',`gender`=$gender',`image`='$image''WHERE `id`='$id'";
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