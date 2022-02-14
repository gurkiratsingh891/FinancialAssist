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
    <script src="js/angular.min.js"></script>
    <script type="text/javascript">
        
        
        
            var myapp = angular.module("app", []);
        myapp.controller("mycontroller", function($scope, $http) { 
                   $scope.json;
            $scope.doFetchJson = function() {
                                
                $http.get("angular-json-fetch-accounts.php?year="+$("#year").val()+"&type="+$("#type").val()).then(first, second);
                function first(jsonArray) {
                //  alert(JSON.stringify(jsonArray.data));
                    $scope.json = jsonArray.data;
                    
                }

                function second(jsonArray) {
                    alert(jsonArray.data);
                }

            }     
      
            
            
        });
        
        
        
    </script>
    <script type="application/javascript">
      
       $(document).ready(function(){
          
    

           for (i = new Date().getFullYear(); i > 1980; i--)
{
    $('#year').append($('<option />').val(i).html(i));
}
           
       });
      
      
      
      
      
      </script>
  
    <style type="text/css">
      
      #header
        {
            height: 70px;
            width: auto;
            background-color: darkslategrey;
            
        }
         
            #footer
        {
            height: 50px;
            background-color: coral;
             font-size: 15px;
        
            padding-top: 15px;
        }
         #main
        {
            min-height: 480px;
        }
      
      
      
      
      
      
      
      </style>
  </head>
  <body  ng-app="app" ng-controller="mycontroller" >

   
   
    <div class="row" id="header">
        
    </div>
    <br>

    <br>

   <div class="container" id="main">
      <div class="row">
        <div class="col-3">
            <select class="custom-select my-1 mr-sm-2 ml-2" name="type"  id="type">
            <option value="1">Select Account type</option>
        <option value="FD">FD Account</option>
        <option value="LIC">LIC Premium</option>
    </select> 
        </div>
                <div class="col-3">
    <select id="year" class="custom-select my-1 mr-sm-2 ml-2" name="type">
                <option value="2">Select Start year of Account</option>

</select>
                </div>
        <div class="col-3">
            <button class="btn btn-success" id="apply" ng-click="doFetchJson();">Apply</button>
        </div>
  <div class="col-3">
        Search:&nbsp;  <input type="text" ng-model="hint">
        </div>

        
        
        
    </div><br><br>
     <table class="table table-bordered" data-ng-init="doFetchJson();">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Account Type</th>
      <th scope="col">Details</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Installment Amount</th>
      <th scope="col">Installment Period</th>
      <th scope="col">Due Date</th>
      <th scope="col">Reminder</th>
      <th scope="col">Document</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="record in json| filter : hint">
      <th scope="row">{{$index+1}}</th>
      <td>{{record.type}}</td>
      <td>{{record.details}}</td>
      <td>{{record.total_amount}}</td>
      <td>{{record.s_date}}</td>
      <td>{{record.e_date}}</td>
      <td>{{record.install_amount}}</td>
      <td>{{record.install_period}}</td>
      <td>{{record.d_date}}</td>
      <td>{{record.reminder}}</td>
        <td><a href="{{record.doc}}">{{record.doc}}</a></td>
    </tr>
      
     
   
  </tbody>
</table>
      </div>
    <br>
    <br>
    <br>
      <div class="" id="footer">
		&nbsp; 		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
    
  </body>
</html>