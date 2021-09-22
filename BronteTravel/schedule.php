<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','brontetravelagency');

    $select_query="SELECT * FROM `package`";
    $result= mysqli_query($connection,$select_query);

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
<meta charset="utf-8">   
<title>Bronte Travel Agency - Ledjo Pilua</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>


<body style="margin:80px auto">
<?php include 'navbar.php';?>  
<div class="container foo">
<div class="row header" style="text-align:center">
<h3>Packages Info</h3>
</div>



<table id="myTable" class="table table-bordered table-striped table-hover table-condensed" >  



         <thead>
                        <th>Reference ID </th>
                        <th>Location</th>
                        <th>Destination Date</th>
                        <th>Arrival Date</th>
                        <th>Transport</th>
                        <th>Price in €</th>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['packageid']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['destinationdate']; ?></td>
                            <td><?php echo $row['arrivaldate']; ?></td>
                            <td><?php echo $row['transport']; ?></td>
                             <td><?php echo $row['price']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
</table>
	  </div>
	  
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        
</script>
    
</body>  

</html>