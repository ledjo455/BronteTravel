<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        $connection= mysqli_connect('localhost','root','','brontetravelagency');



    $username= $_SESSION['username'];

    
    $query= "SELECT  `first_name`, `last_name`, `email` FROM `client` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $query5= "SELECT * FROM `package` ";
 
  
    
    $row= mysqli_fetch_assoc($result);
    
    $name= $row['first_name']." ". $row['last_name'];
   
   $result2 = mysqli_query($connection, $query5);
   $result6 = mysqli_query($connection, $query5);

$options = "";


while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[1] at this price: $row2[6]</option>";
}
$location = "";
while ($row6 = mysqli_fetch_array($result6)) {
    $location = $location . "<option>$row6[1]</option>";
}
?> 
 <style>
body {
  background-image: url('beach.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
    <link rel="stylesheet" href="animate.css">
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Booking</h1>
                 
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="bookingaction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>Name</b></span>
                      <input id="fullname" type="text" class="form-control" name="fullname" value="<?php echo $row['first_name']." ". $row['last_name']; ?>"  required>
                    </div>
                    
                    <br>
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Select Travel Package</b></span> &nbsp;
                       
                      
                      <select name="package">
                          <?php echo $options; ?>
                      </select>
                      
                    </div>
                    <br>
                     <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Confirm Location</b></span> &nbsp;
                       
                      
                      <select name="location">
                          <?php echo $location ?>
                      </select>
                      
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Requirement</b></span>
                      <input id="dest_date" type="text" class="form-control" name="dest_date" placeholder="Destination Date" required>
                    
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#dest_date" ).datepicker();
                       
                        
                      } ); 
                        
                        
                        
                    </script> 
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Return</b></span>
                      <input id="arrival_date" type="text" class="form-control" name="arrival_date" placeholder="Arrival Date" required>
                    
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#arrival_date" ).datepicker();
                       
                      } );
                    </script>
                   
                    <br>
                    
                  
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Mobile</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile No" required>
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>