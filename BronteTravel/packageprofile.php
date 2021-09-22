<?php
    $connection= mysqli_connect("localhost","root","","brontetravelagency");
    
    session_start();

    $packageid= $_GET['packageid']; 

    $sql= "SELECT * FROM `package` WHERE packageid='$packageid' or location='$packageid'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bronte Travel</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>  
     <style>
body {
  background-image: url('blur.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
  
   <?php  include 'navbar.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container">
          <div class="row"> 
          <div class="fb-profile-text" id="h1" >
                            <h2><?php echo $row['location']; ?></h2>
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="travel package/<?php echo $row['packagephoto'] ?>" alt="dp"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      Travel Package Information </a>
                    </li>
                    
                    <!--
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                     Bill </a>
                    </li>
                    -->
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                     <h4><strong>Destination Date</strong></h4>
                      <p><?php echo $row['destinationdate']; ?></p>
                      
                      <h4><strong>Type of Transport</strong></h4>
                      <p><?php echo $row['transport']; ?></p>
                      
                      <h4><strong>LOCATION</strong></h4>
                      <p>
                        <?php echo $row['location']; ?> 
                      </p>
                      <!--
                      
                      -->
                      <h4><strong>Package Category</strong></h4>
                      <p><?php echo $row['packagetype']; ?></p>
      
                      
                      <h4><strong>Price</strong></h4>
                      <p><?php echo $row['price']; ?></p>
                      
                      <h4><strong>Information</strong></h4>
                      <p><?php echo $row['moreinfo']; ?></p>

                    </div>
                    
   
                            
                  </div>
                  
                   
                  
                
                  
                </div>
              </div>
           </div>
          </div>
        </div>
        
          <!-- /container fluid-->  
        <div class="container">
          <div class="col-sm-12"> 
              
          </div>
    </div>
    
</body>
</html>




