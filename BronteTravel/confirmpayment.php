<?php

    $connection=mysqli_connect("localhost","root","","brontetravelagency");

    session_start();
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT * FROM `travelfinance` WHERE order_id='$id'";
    $query1="UPDATE `reservations` SET `paid`='1' WHERE orderid='$id'";
  
    $result= mysqli_query($connection,$query);
    $result1= mysqli_query($connection,$query1);
    $row= mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bill</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php include 'navbar_admin.php'; ?>
        <br><br>
        
        <div class="row">
           <div class="page-header">
            <h1 style="text-align: center;">Trip Details</h1>
            <?php echo $msg; ?>
           
           
      
          </div> 
            <div class="col-md-3"></div>
            <div class="col-md-6">
                  <p><strong>Reference ID: </strong><?php echo $row['order_id']; ?></p>       
                  <p><strong>Tax charge: </strong><?php echo $row['taxcost']; ?></p>    
                  <p><strong>Extra Charge: </strong><?php echo $row['extra']; ?></p>    
                  <p><strong>Full Price: </strong><?php echo $row['total']; ?></p>
                  
                <form action="confirmpaymentaction.php?id=<?php echo $row['order_id']; ?>" method="post">
                    <button class="btn btn-success">Confirm Payment</button>
                </form> 
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>