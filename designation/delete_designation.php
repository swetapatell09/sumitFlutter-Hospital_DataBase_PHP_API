<?php
include('../connection.php');
header('Content-type: application/json');

$id = $_POST['id'];

$query = "DELETE FROM `designation` WHERE `id`='$id'";
$get = mysqli_query($con, $query);

    if ($get) 
    {
        $msg = array('status' => "ok", 'message' => "success");
        echo json_encode($msg, JSON_PRETTY_PRINT);  
        http_response_code(200);
    } 
    else 
    {
        $msg = array('status' => "failed", 'message' => "failed");
        echo json_encode($msg, JSON_PRETTY_PRINT);  
        http_response_code(400);
    }
 

?>