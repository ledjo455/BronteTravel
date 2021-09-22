<?php 
    $connection=mysqli_connect("localhost","root","","brontetravelagency");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bronte Travel Agency - Ledjo Pilua</title>
    
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
<style>
    
.parallax {
    /* The image used */
    background-image: url("background.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("1287373.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
    
     
     
     
   
    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px; text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >Bronte Travel Unlimited</h1>
            <p>Find your spirit... while getting lost on the best travel experience</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="booking.php">Book Travel</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login here to book a travel package</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">About Us</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                 <p style="font-size: 20px;">We are a travel agency located in Tirana, Albania with many years
                 of excellent experience offering an unforgettable travel experience.</p>
                 <img src="tirana.jpg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=University%20Of%20New%20York%20in%20Tirana&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/en/">google maps website</a></div>
                   <p>OUR LOCATION</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
               
        </div>
        <div class="parallax1"></div>
        <div id="plane" class="container">
         
               
        </div>
        
        
        <div id="service" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Services: </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="LOGO5.gif" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <br></br>
                  <p style="font-size:20px;">
                      
                      <b>Safety and quality comes first.More than 30  travel agents will find you the perfect destination.</b>
                  </p> <p> <b>- For private group tours and businesses. </b> <p>

                  <p> <b>- Flexible when it comes to last minute changes. </b> </p>

                  <p> <b>- Specialist in supporting all the tour logistics.</b></p>
                  <p> <b>- Price Guarantee.</b></p>
                  <p> <b>- Always there to help to personalize your bookings.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer style="background-color: #eb6b34;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <p>Ledjo Pilua, Bronte Travel Agency.</p> 
        </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>