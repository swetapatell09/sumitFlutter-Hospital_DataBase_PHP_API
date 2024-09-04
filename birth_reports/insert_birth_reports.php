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


if($babyname != null && $gender != null && $date != null && $time != null && $hospitaldetails != null && $doctorname != null && $nursename != null && $username != null && $fathername != null && $babyweight != null)
{
    
        $query="INSERT INTO `birth_reports` (`babyname`,`gender`,`date`,`time`,`hospitaldetails`,`doctorname`,`nursename`,`username`,`fathername`,`babyweight`) VALUES ('$babyname','$gender','$date','$time','$hospitaldetails','$doctorname','$nursename','$username','$fathername','$babyweight')";
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

    
