<?php
include ('../connection.php');
header('Content-type:application/json');
$transaction=$_POST['transaction'];
$date=$_POST['date'];
$time=$_POST['time'];
$cashpayment=$_POST['cashpayment'];
$epayment=$_POST['epayment'];

if($transaction != null && $date != null && $time != null && $cashpayment != null && $epayment != null)
{
    
        $query="INSERT INTO `accounting` (`transaction`,`date`,`time`,`cashpayment`,`epayment`) VALUES ('$transation','$date','$time','$cashpayment','$epayment')";
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

    
