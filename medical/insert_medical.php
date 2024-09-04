<?php
include ('../connection.php');
header('Content-type:application/json');
$mcompany=$_POST['mcompany'];
$mname=$_POST['mname'];
$mtypes=$_POST['mtypes'];
$mprice=$_POST['mprice'];

if($mcompany != null && $mname != null && $mtypes != null && $mprice != null)
{
    
        $query="INSERT INTO `medical` (`mcompany`,`mname`,`mtypes`,`mprice`) VALUES ('$mcompany','$mname','$mtypes','$mprice')";
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

    
