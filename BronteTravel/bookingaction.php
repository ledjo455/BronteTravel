<?php
    $connection= mysqli_connect('localhost','root','','brontetravelagency');
    session_start();

    $msg="";
    
    if(isset($_POST['submit'])){
        $fullname=$_POST['fullname'];
        $package=$_POST['package'];
        $location=$_POST['location'];
        $dest_date=$_POST['dest_date'];
        $arrival_date=$_POST['arrival_date'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username= $_POST['username'];
        
        $insert_query="INSERT INTO `reservations`(`orderid`, `fullname`,`username` ,`package`, `dest_date`, `arrival_date`,  `email`, `mobile`, `confirmation`, `location`, `agentid`, `finished`, `paid`)"
                . " VALUES ('','$fullname','$username','$package','$dest_date','$arrival_date','$email','$mobile','$location','$mobile','','1','')"; 
        echo $fullname;
        
        
        
        
        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
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
        
        
    }
?>
<!DOCTYPE html>
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
            window.location='booking.php'
        }, 1000);
    </script>

</body>
</html>
