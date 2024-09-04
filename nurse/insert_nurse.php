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

if($name != null && $mobile != null && $email != null && $password != null && $degree != null && $experience != null && $age != null && $gender != null && $description != null && $address != null && $image != null )
{
    
        $query="INSERT INTO `nurse` (`name`,`mobile`,`email`,`password`,`degree`,`experience`,`age`,`gender`,`description`,`address`,`image`) VALUES ('$name','$mobile','$email','$password','$degree','$experience','$age','$gender','$description','$address','$image')";
        $get = mysqli_query($con,$query);

        if($get)
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

    }
    
else{
    $msg=array('status'=>"failed",'message'=>"Invalid key");
    echo json_encode($msg,JSON_PRETTY_PRINT);
    http_response_code(400);
}

?>

    
