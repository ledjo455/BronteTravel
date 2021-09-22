<?php
     $connection= mysqli_connect('localhost','root','','brontetravelagency');
    session_start();

    $id= $_GET['id'];
    

    $msg="";

    if(isset($_POST['submit'])){
        $username= $_POST['username'];
        $taxcost=$_POST['taxcost'];
        $extra=$_POST['extra'];
        $total=$_POST['total'];
        $flight=$_POST['flight'];
        $hotel=$_POST['hotel'];
        
    } 

    $sql="INSERT INTO `travelfinance`(`order_id`,`username`, `taxcost`, `extra`, `total`) VALUES ('$id','$username','$taxcost','$extra','$total')";
    $sql5="INSERT INTO `payment`(`paymentid`,`id`,`username`, `flight`, `hotel`, `taxes`,`fullprice`) VALUES ('','$id','$username','$flight','$hotel','$taxcost','$total')";
    $result5= mysqli_query($connection,$sql5);
    $result= mysqli_query($connection,$sql);
   
    if($result==true && $result5==true){
        $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
    
    
?>    


<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='bookinglist.php'
        }, 1000);
    </script>
</body>
</html>