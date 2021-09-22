<?php
    $connection= mysqli_connect("localhost","root","","brontetravelagency");
    session_start();
    
    $id= $_GET['id']; 

    $sql= "SELECT * FROM `reservations` WHERE orderid='$id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $sql1= "SELECT * FROM `package` WHERE availability='0'"; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);

    $sql2= "SELECT * FROM `agent` WHERE agentavailability='0'"; 
    //echo $sql;
    $res2= mysqli_query($connection,$sql2);
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm booking</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'navbar_admin.php'; ?>
  <br>
   <div class="container">
       <div class="row">
          <div class="col-md-3"></div>
           <div class="col-md-6">
              <div class="page-header">
                <h1 style="text-align:center;">Confirm Reservation</h1>
                 <?php //echo $msg; ?>
                </div>
                
                
                
                <p><strong>Booking Id: </strong><?php echo $row['orderid']; ?></p> 
                
               
                <p><strong>Customer Name: </strong><?php echo $row['fullname']; ?></p> 
                
                
                <p><strong>Requested Date: </strong><?php echo $row['dest_date']; ?></p> 
                
                
                <p><strong>Requested Time: </strong><?php echo $row['arrival_date']; ?></p> 
                
                
                
                
                
                <p><strong>Email: </strong><?php echo $row['email']; ?></p> 
                
                
                <p><strong>Mobile: </strong><?php echo $row['mobile']; ?></p> 
                
                
                
               <form action="sendmail.php?id=<?php echo $id; ?>" method="post">
       
                    <div class="input-group">
                      <span class="input-group-addon"><b>Available Packages</b></span>
                        <select class="form-control" name="location";>
                           <?php
                               while($row1=mysqli_fetch_assoc($res1)) {  ?> 
                            ?>
                            <option><?php echo $row1['location'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Available Agents</b></span>
                        <select class="form-control" name="agentid">
                           <?php
                               while($row2=mysqli_fetch_assoc($res2)) {  ?> 
                            ?>
                            <option><?php echo $row2['agentid']," ",$row2['agentname'] ; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                   
                    <br>
                    <button class="btn btn-success" type="submit" name="email">Confirm</button>
                </form>
           </div>
           <div class="col-md-3"></div>
       </div>
   </div>
    
</body>
</html>