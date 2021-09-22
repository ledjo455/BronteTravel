<?php
    $connection= mysqli_connect('localhost','root','','brontetravelagency');
    session_start();

    $id= $_GET['id'];

    $sql= "UPDATE `travelfinance` SET `paid`='1' WHERE order_id='$id'";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: bookinglist.php');
    }
?>