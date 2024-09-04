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




if($doctorname != null && $fees != null && $experience != null && $age != null && $description != null && $mobile != null && $email != null && $image != null && $degree != null && $specialist != null && $password != null && $birthdate != null && $gender != null)
{
    
        $query="INSERT INTO `doctor` (`fees`,`doctorname`,`experience`,`age`,`description`,`mobile`,`email`,`image`,`degree`,`specialist`,`password`,`birthdate`,`gender`) VALUES ('$fees','$doctorname','$experience','$age','$description','$mobile','$email','$image','$degree','$specialist','$password','$birthdate','$gender')";
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

    
