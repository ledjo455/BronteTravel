<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect('localhost','root','','brontetravelagency');
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $location= $_POST['location'];
        $packagetype= $_POST['packagetype'];
        $destinationdate= $_POST['destinationdate'];
        $arrivaldate= $_POST['arrivaldate'];
        $transport= $_POST['transport'];
        $price= $_POST['price'];
        $moreinfo= $_POST['moreinfo'];
        $packagephoto= $_FILES['file']['name'];
        
        //image Upload
    
        move_uploaded_file($_FILES['file']['tmp_name'],"travel package/".$_FILES['file']['name']); 
        
        
 
        $res=false;
        $insert_query="INSERT INTO `package`(`packageid`, `location`, `packagetype`, `destinationdate`, `arrivaldate`, `transport`, `price`, `moreinfo`, `packagephoto`) VALUES ('','$location','$packagetype','$destinationdate','$arrivaldate','$transport','$price','$moreinfo','$packagephoto')";
        
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
        
    }
    
    //$msg="";

    
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New package</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Add New Package </h1>
            <?php echo $msg; ?>
      </div> 
       <div class="col-md-3">
        
     
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Location</b></span>
                  <input id="location" type="text" class="form-control" name="location" placeholder="Location">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Package Type</b></span>
                   <input id="packagetype" type="text" class="form-control" name="packagetype" placeholder="packagetype">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Destination Date</b></span>
                  <input id="destinationdate" type="text" class="form-control" name="destinationdate" placeholder="destinationdate">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Arrival Date</b></span>
                  <input id="arrivaldate" type="text" class="form-control" name="arrivaldate" placeholder="Arrival Date">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Transport</b></span>
                  <input id="transport" type="text" class="form-control" name="transport" placeholder="Transport">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Price</b></span>
                  <input id="price" type="text" class="form-control" name="price" placeholder="Price">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#destinationdate" ).datepicker();
                      } );
                </script> 
                <br>
                 <script>
                      $( function() {
                        $( "#arrivaldate" ).datepicker();
                      } );
                </script> 
                
                
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Description</b></span>
                     <textarea rows="9" id="moreinfo" type="text" class="form-control" name="moreinfo" placeholder="More Info"> </textarea>
                  
                </div>
                <br>
                
             
                <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                
                
                 
                
                <div class="input-group">
                    <br> </br>
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>

              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>