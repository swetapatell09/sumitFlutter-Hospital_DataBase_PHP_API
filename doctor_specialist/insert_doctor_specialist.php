<?php
include ('../connection.php');
header('Content-type:application/json');
$specialist=$_POST['specialist'];

if($specialist != null )
{
    
        $query="INSERT INTO `doctor_specialist` (`specialist`) VALUES ('$specialist')";
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

    
