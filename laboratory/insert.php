<?php
include('connection.php');
header('Content-type:application/json');


$laboratory_name=$_POST['laboratory_name'];
$report_types=$_POST['report_types'];




if($laboratory_name !=null && $report_types !=null)
{
    $query="INSERT INTO laboratory(`laboratory_name`,`report_types`) VALUES ('$laboratory_name','$report_types')";
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