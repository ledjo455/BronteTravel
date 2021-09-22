<?php

    $connection=mysqli_connect("localhost","root","","brontetravelagency");

    session_start();
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT  `username` FROM `reservations` WHERE orderid='$id'";
    $result= mysqli_query($connection,$query);
    $row= mysqli_fetch_assoc($result);

    //echo $row['username'];
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
                <form action="billaction.php?id=<?php echo $id; ?>" method="post">
                   
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b> Flight Cost</b></span>
                      <input id="flight" type="text" class="form-control" name="flight" placeholder="Flight">
                    </div>
                     <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b> Hotel Cost</b></span>
                      <input id="hotel" type="text" class="form-control" name="hotel" placeholder="hotel">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b> Tax Cost</b></span>
                      <input id="tax" type="text" class="form-control" name="taxcost" placeholder="Taxes">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Extra Cost</b></span>
                      <input id="extra" type="text" class="form-control" name="extra" placeholder="Extra Cost">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Full Price</b></span>
                      <input id="full" type="text" class="form-control" name="total" placeholder="Full Pricce">
                    </div>
                    <br>
                    
                     <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                     
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                    
                   
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>