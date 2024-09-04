<?php
include ('../connection.php');
header('Content-type:application/json');
$fees=$_POST['fees'];
$doctorname=$_POST['doctorname'];
$experience=$_POST['experience'];
$age=$_POST['age'];
$description=$_POST['description'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$image=$_POST['image'];
$degree=$_POST['degree'];
$specialist=$_POST['specialist'];
$password=$_POST['password'];
$birthdate=$_POST['birthdate'];
$gender=$_POST['gender'];

$query="UPDATE `doctor` SET `fees`='$fees',`doctorname`='$doctorname',`experience`='$experience',`age`='$age',`description`='$description',`mobile`='$mobile',`email`='$email',`image`='$image',`degree`='$degree',`specialist`='$specialist',`password`='$password',`birthdate`='$birthdate',`gender`='$gender''WHERE `id`='$id'";
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