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


if($name != null && $age != null && $gender != null && $disease != null && $surgery != null && $hospitaldetails != null && $doctorname != null && $nursename != null && $deathdate != null && $deathtime != null)
{
    
        $query="INSERT INTO `death_reports` (`name`,`age`,`gender`,`disease`,`surgery`,`hospitaldetails`,`doctorname`,`nursename`,`deathdate`,`deathtime`) VALUES ('$name','$age','$gender','$disease','$surgery','$hospitaldetails','$doctorname','$nursename','$deathdate','$deathtime')";
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

    
