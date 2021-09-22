<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','brontetravelagency');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $agentname=$_POST['agentname'];
        $agentjoined=$_POST['agentjoined'];
        $agentmobile=$_POST['agentmobile'];
        $agentlocation=$_POST['agentlocation'];
        $agentemail=$_POST['agentemail'];
        $agentpic= $_FILES['file']['name'];

    
       move_uploaded_file($_FILES['file']['tmp_name'],"agentphotos/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `agent`(`agentid`, `agentname`, `agentjoined`, `agentmobile`, `agentlocation`, `agentemail`, `agentpic`) VALUES ('','$agentname','$agentjoined','$agentmobile','$agentlocation','$agentemail','$agentpic')";
        
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
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }

    
        
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Agent</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Add A new Agent to the System</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Name of the Agent</b></span>
                  <input id="agentname" type="text" class="form-control" name="agentname" placeholder="Insert Full Name">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Mobile</b></span>
                  <input id="agentmobile" type="text" class="form-control" name="agentmobile" placeholder="Add Contact Number">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Agent Joined Date</b></span>
                  <input id="agentjoined" type="text" class="form-control" name="agentjoined" placeholder="Select Date">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#agentjoined" ).datepicker();
                      } );
                </script> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Location</b></span>
                  <input id="agentlocation" type="text" class="form-control" name="agentlocation" placeholder="Location">
                </div>
                <br>  
                
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Email Address</b></span>
                     <input id="agentemail" type="text" class="form-control" name="agentemail" placeholder="test@unyt.edu.al"> </textarea>
                  
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                
                
                 
                
                <div class="input-group">
                    <br>
                  <input type="submit" name="submit" class="btn btn-success">
                    </br>
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>