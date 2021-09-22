<?php
    
    $connection= mysqli_connect("localhost","root","","brontetravelagency");
    session_start();
    
    $id= $_GET['id'];

    $sql= "SELECT * FROM `reservations` WHERE orderid='$id'"; 


    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

     $agentid= $_POST['agentid'];    
    $location= $_POST['location'];

$update_query="UPDATE `reservations` SET `confirmation`='1',`location`='$location',`agentid`='$agentid' WHERE orderid='$id'; UPDATE `package` SET `availability`='1' WHERE location='$location';UPDATE `agent` SET `agentavailability`='1' WHERE agentid='$agentid'";
    

$res3=mysqli_multi_query($connection,$update_query);  //to run multiple query
 
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>success</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="animate.css">
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <?php include 'navbar_admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <br><br><br><br><br>
                <div class="alert alert-success animated tada">
                      <strong>Success!</strong> Mail has been sent successfully.
					  
                </div>
                
                <a class="btn btn-default" href="bookinglist.php">Go Back</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
     
 </body>
 </html>
 

