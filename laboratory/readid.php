<?php
include('../connection.php');
header('Content-type:application/json');
$id=$_POST['id'];
if($id != null)
{
    $query="SELECT * FROM laboratory WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if($res)
    {
        $data=mysqli_fetch_assoc($res);
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    else
    {
        $msg=array('status'=>"failed",'message'=>"failed");
            echo json_encode($msg,JSON_PRETTY_PRINT);
            http_response_code(400);
    }

}
else{
    $msg=array('status'=>"failed",'message'=>"failed");
            echo json_encode($msg,JSON_PRETTY_PRINT);
            http_response_code(400);
}

?>