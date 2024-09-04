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

if($name != null && $mobile != null && $email != null && $password != null && $experience != null && $age != null && $gender != null && $image != null )
{
    
        $query="INSERT INTO `receptionist` (`name`,`mobile`,`email`,`password`,`experience`,`age`,`gender`,`image`) VALUES ('$name','$mobile','$email','$password','$experience','$age','$gender','$image')";
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

    
