<?php
include('connection.php');
header('Content-type:application/json');


$room_types=$_POST['room_types'];
$price=$_POST['price'];




if( $room_types !=null && $price !=null)
{
    $query="INSERT INTO rooms(`room_types`,`price`) VALUES ('$room_types','$price')";
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