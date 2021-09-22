<?php 
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 
    
    $username= $_GET['id'];
    //echo $username;
    
    $connection= mysqli_connect('localhost','root','','brontetravelagency');

    $query= "SELECT reservations.orderid, reservations.dest_date,  reservations.`location`, reservations.`agentid`, travelfinance.taxcost, travelfinance.extra,travelfinance.total,travelfinance.paid FROM `reservations` LEFT JOIN `travelfinance` ON reservations.username=travelfinance.username WHERE reservations.username='$username' AND reservations.orderid=travelfinance.order_id;";



    $result= mysqli_query($connection,$query);
    
    
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
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align: center;">My Bill</h1>
            </div>
        </div>
        
        
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Reference ID</th>
                        <th>Date of the Journey</th>
                        <th>Location</th>
                        <th>Tax Cost</th>
                        <th>Extra Cost</th>
                        <th>Total Cost</th>
                        <th>Paid</th>
                    </tr>  
                </thead>

                <tbody>
<?php
    while($row=mysqli_fetch_assoc($result)) {
                
?>
                    <tr>
                        <td><?php echo $row['orderid']; ?></td>
                        <td><?php echo $row['dest_date']; ?></td>
                                   
                        <td><a href="packageprofile.php?packageid=<?php echo $row['location'] ?>"><?php echo $row['location'] ?></a></td>
    
                       
                        <td><?php echo $row['taxcost']; ?></td>
                        <td><?php echo $row['extra']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                        
                       <?php if($row['paid']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                    </tr>                    
                </tbody>
<?php } ?>
            </table>
        </div>
    </div>
</body>
</html>