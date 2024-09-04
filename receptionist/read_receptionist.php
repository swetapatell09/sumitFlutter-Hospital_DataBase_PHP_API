<?php
include('../connection.php');
header('Content-type:application/json');

$query="SELECT * FROM receptionist";
$res=mysqli_query($con,$query);
if($res)
{
    $data=mysqli_fetch_assoc($res);
    echo json_encode($data, JSON_PRETTY_PRINT);
}
?>