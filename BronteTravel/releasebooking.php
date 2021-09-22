<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','brontetravelagency'); 

    $sql1="SELECT `location`, `agentid` FROM `reservations` WHERE orderid='$id'";
    $result1=mysqli_query($conn,$sql1);
    $row= mysqli_fetch_assoc($result1);
    $location=$row['location']; 
    $agentid=$row['agentid'];
echo $location;
echo $agentid;
    
    
    
   $sql="UPDATE `package` SET `availability`='0' WHERE location='$location'; UPDATE `agent` SET `agentavailability`='0' WHERE agentid='$agentid'; UPDATE `reservations` SET `finished`='1' WHERE orderid='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: bookinglist.php");
   }else{
         echo "Not freed";
   }
   
?>