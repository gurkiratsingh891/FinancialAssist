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
   
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Dashboard</title>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-1.9.1.js" ></script>
    <script src="js/bootstrap.js"></script>
      <script src="js/angular.min.js"></script>
   
      <style type="text/css">
      #header
          {
              background-color: cornflowerblue;
          }
          #subheader {
            background-color: coral;
            padding-top: 5px;
            border-radius: 50px;

        }
           .card
        {
            border: none;
            text-align: center;
            transition: ease all 1s;

        }
        .card:hover
        {
            background-color: bisque;
            cursor: pointer;
            transform: scale(1.02);
            transition: ease all 2s;
            
        }
           .card-pic
        {
             height: 150px;
             width: 150px;
        }
          .abc
          {
              text-decoration: none;
              color: black;
          }
          .abc:hover
          {
              text-decoration: none;
              color: black;
          }
         #footer
        {
            height: 50px;
            background-color: coral;
             font-size: 15px;
        
            padding-top: 15px;
        }
          #logout-button
          {
              color: black;
              border-radius: 20px;
               transition: ease all 2s;
          }
           #logout-button:hover
          {
              border: 3px solid coral;
                transform: scale(1.02);
            transition: ease all 2s;
          }
          #welcome
          {
              color: white;
              margin-top: 3px;
          }
      .icon-button
          {
              color: black;
              background-color: coral;
          }
            .icon-button:hover
          {
              color: white;
              background-color: black;
              
              
          }
      
      
      
      </style>
         <script type="text/javascript">
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </script></head>
        <body>









 <div class="row bg-dark" style="height:50px">
       
     <div class=" col-8"><h3 class="ml-3 mt-1" id="welcome">Welcome <?php echo $_SESSION["uid"]?></h3></div>
           
        <div class=" col-4"><form action="logout.php">
                <button class="btn  float-right mr-3 mt-1" id="logout-button" type="submit">Logout</button> &nbsp; &nbsp;</form>
           </div>
         
        
    </div>










<div class="container">
      <br>
       
        <div class="row" style="" >
            <div class="col-md-12 text-md-center" id="subheader"><center><h3>Dashboard</h3></center>
             </div></div>
      <div class="row p-4 bg-white" id="main">
          <div class="row" style="height: 70px"></div>
               <div class="row  bg-transparent">
               <div class="col-md-4"><a href="add_account.php" class="abc">
                <div class="card my-transparent" style="text-align: center">
                    <center>    <img class="card-img-top card-pic "  src="pics/add.png" alt="Card image cap" ></center>
                    <div class="card-body">
                        <h5 class="card-title">Add Account</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="add_account.php"  class="btn mt-4 icon-button">Add</a>
                    </div>
                   </div></a>
            </div>
            <div class="col-md-4"><a href="view_accounts.php" class="abc">
                <div class="card my-transparent" style=" margin: auto">
                    <center><img class="card-img-top card-pic" src="pics/view%20all.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">View Accounts</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="view_accounts.php" class="btn icon-button mt-4">View</a>
                    </div>
                </div></a>
            </div>
           <div class="col-md-4"><a href="pending.php" class="abc">
                <div class="card my-transparent">
                    <center> <img class="card-img-top card-pic" src="pics/pending%20payments.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title ">Pending payments</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        <a href="pending.php" class="btn icon-button mt-4">View</a>
                    </div>
               </div></a>
               </div>
          </div><br><br><br></div></div>
          <div class="" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
  </body>
</html>
        