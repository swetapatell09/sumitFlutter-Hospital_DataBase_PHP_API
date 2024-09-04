<?php
include('connection.php');
header('Content-type:application/json');


$verify=$_POST['verify'];
$isSuccess=$_POST['isSuccess'];




if( $verify !=null && $isSuccess !=null)
{
    $query="INSERT INTO user_verify(`verify`,`isSuccess`) VALUES ('$verify','$isSuccess')";
    $get = mysqli_query($con,$query);

    if($get)
    {
        $msg=array('status'=>"ok",'message'=>"success");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(200);
    }
    else{
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