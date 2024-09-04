<?php
include ('../connection.php');
header('Content-type:application/json');
$p_bottel=$_POST['p_bottel'];
$p_injection=$_POST['p_injection'];
$p_medicine=$_POST['p_medicine'];
$p_serup=$_POST['serup'];

if($p_bottel != null && $p_injection != null && $p_medicine != null && $p_serup != null)
{
    
        $query="INSERT INTO `medicine_price` (`p_bottel`,`p_injection`,`p_medicine`,`p_serup`) VALUES ('$p_bottel','$p_injection','$p_medicine','$p_serup')";
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

    
