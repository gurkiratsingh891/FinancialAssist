
<?php

    include_once("mysqli-connection.php");
include_once("session.php");


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>View Accounts</title>
       <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.9.1.js"></script>

    <script type="application/javascript">
      
       $(document).ready(function(){
          
           
           
           
           
       });
      
      
      
      
      
      </script>
    <style type="text/css">
      
      #header
        {
            height: 70px;
            width: auto;
            background-color: darkslategrey;
            
        }
        #main
        {
            min-height: 300px;
        }
         
            #footer
        {
            height: 50px;
            background-color: coral;
             font-size: 15px;
        
            padding-top: 15px;
        }
      
      
      
      
      
      
      
      </style>
  </head>
  <body  >

   
   
    <div class="row" id="header">
        
    </div>
    <br>
    
    <br><div id="main">
    <center>
<h4>
    
    <?php
include_once("mysqli-connection.php");
include_once("session.php");
$type=$_POST["type"]; 
$uid=$_SESSION["uid"];
$details=$_POST["details"];
$t_amt=$_POST["total_amount"];
    $s_date=$_POST["s_date"];
    $e_date=$_POST["e_date"];
        $period=$_POST["instal_period"];
        $amt=$_POST["instal_amount"];
        $d_date=$_POST["d_date"];
        $rem=$_POST["reminder"];
   $orgName=$_FILES["doc"]["name"];
   $tmpName=$_FILES["doc"]["tmp_name"];
$date=date_create($d_date);
date_add($date,date_interval_create_from_date_string("$period months"));
$gh=date_format($date,"Y-m-d");

  /*  $c="SELECT DATE_ADD('1997-12-31', INTERVAL 2 MONTH)";
$asd=mysqli_query($dbcon,$c);
while($row = $asd->fetch_assoc())
   $toEcho = $row["value"];
echo $toEcho;
$gh=mysqli_fetch_assoc($asd);
echo "Resycdc".$gh['value'];*/
   $docpath="uploads/".$orgName;
    
    move_uploaded_file($tmpName,$docpath);
$query="insert into account values('$uid','$type','$details',$t_amt,'$s_date','$e_date',$period,$amt,'$gh','$rem','$docpath')";
   mysqli_query($dbcon,$query);


    if(mysqli_error($dbcon)=="")
        echo "Record Submitted....";
    else
    { echo mysqli_error($dbcon);
     echo "Sorry an error occured";
    }
?>
        </h4></center></div>
        <br>
        <br>
<center>       <a href="add_account.php"> <h5>
            Add more account
           </h5></a>
       <a href="dashboard.php"> <h5>Go to Dashboard
            
           </h5></a></center>
   
  
    
    <br>
    <br>
    <br>
      <div class="bott" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
    
  </body>
</html>











