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

    <title>Add Account</title>
       <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <style type="text/css">
      
      #header
        {
            height: 70px;
            width: auto;
            background-color: darkslategrey;
            
        }
           #subheader {
            background-color: coral;
            padding-top: 5px;
            border-radius: 50px;

        }
        #new_account_form{
            border: 1px solid black;
            border-radius: 30px;
            padding: 10px
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
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <div class="row" id="header">
        
    </div>
    <br>
    <br>
    <div class="row" style="" >
            <div class="col-md-1"></div>
        <div class="col-md-10  text-md-center" id="subheader"><center><h3>Add Account</h3></center>
             </div>
             <div class="col-md-1"></div>
             </div>
    <br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="new_account_form">
    <br><br>
    <form class="col-md-10 offset-md-1" method="post" enctype="multipart/form-data" action="add_account-process.php">
     <div class="form-group">
    <label for="exampleInputEmail1">Account Type</label>
    <select class="custom-select my-1 mr-sm-2" name="type" required id="inlineFormCustomSelectPref">
    
        <option value="FD">FD Account</option>
        <option value="LIC">LIC Premium</option>
    </select> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Account Details</label>
    <input type="text" class="form-control" required id="exampleInputEmail1" name="details" aria-describedby="emailHelp" placeholder="Account Name, Service provider..etc">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Amount</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="total_amount" placeholder="Enter total amount">
  </div>
  <div >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Start Date</label>
      <input type="date" class="form-control" required name="s_date" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">End Date (Due date of last instalment)</label>
      <input type="date" class="form-control" required name="e_date" id="inputPassword4">
    </div>
  </div>
 
  
        </div>
        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Installment Period</label>
  <select class="custom-select my-1 mr-sm-2" name="instal_period" required id="inlineFormCustomSelectPref">
    <option value="1">1 month</option>
    <option value="2">2 months</option>
    <option value="3">3 months</option>
    <option value="6">6 months</option>
    <option value="12">12 months</option>
  </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Installment Amount</label>
      <input type="number" class="form-control" name="instal_amount" id="inputPassword4" required placeholder="Enter amount (in Rs)">
    </div>
            </div>
                 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Due Date of Previous paid instalment</label>
      <input type="date" name="d_date" required class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Get reminder before</label>
      <input type="number" name="reminder" required class="form-control" id="inputPassword4" placeholder="Enter Days">
    </div>
            </div>
           <div class="custom-file">
           <label for="validatedCustomFile1">Upload Document</label>
    <input type="file" name="doc" class="custom-file-input" id="validatedCustomFile">
    <label class="custom-file-label" for="validatedCustomFile">Upload Account Document</label>
  </div>
            <br><br>
            <input type="submit" id="submit-button" class="btn btn-dark offset-md-5">
        
        <br>
        
        
        
        
        </form>
      </div>
      <div class="col-md-2"></div>
      </div>
      </div>
    
    
    <br>
    <br>
    
    
    
    
      <div class="" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
    
  </body>
</html>