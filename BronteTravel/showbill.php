<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','brontetravelagency');
   $sql="SELECT * FROM payment WHERE id='$id'";
   $result=mysqli_query($conn,$sql);

   $payment=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bronte Travel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    
    <br><br><br>
	 <?php include 'navbar_admin.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="indexbill.php">Go Back to Payments</a>
        </div> 
        <div class="col-md-6">
        <h2>Payment</h2>
        <hr>
          
        <table class="table" >
           
          <tr>
            <th >Flight price:</th>
            <td><?php echo $payment['flight']; ?></td>
          </tr>
          <tr>
            <th >Hotel price:</th>
            <td><?php echo $payment['hotel']; ?></td>
          </tr>
          <tr>
            <th >Taxes:</th>
            <td><?php echo $payment['taxes']; ?></td>
          </tr>
          <tr>
            <th >Full Price:</th>
            <td><?php echo $payment['fullprice']; ?></td>
          </tr>
        </table>  

        </div>
      </div>
    </div>


   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 