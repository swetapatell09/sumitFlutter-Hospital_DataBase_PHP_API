<?php
include ('../connection.php');
header('Content-type:application/json');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$degree=$_POST['degree'];
$experience=$_POST['experience'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$description=$_POST['description'];
$address=$_POST['address'];
$image=$_POST['image'];

$query="UPDATE `nurse` SET `name`='$name',`mobile`='$mobile',`email`='$email',`password`='$password',`degree`='$degree',`experience`='$experience',`age`='$age',`gender`='$gender',`decription`,'$description',`address`='$address',`image`='$image''WHERE `id`='$id'";
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