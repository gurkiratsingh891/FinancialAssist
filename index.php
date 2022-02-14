<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/fontawesome-all.css">
    <title>FinancialAssist</title> <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <style type="text/css">
      
      
            #subheader
        {
            background-color: coral;
            padding-top: 5px;
            border-radius: 50px;
        }
        .card
        {
            border: none;
            text-align: center;
        }
      
       .card-pic
        {
         height: 150px;
            width: 150px;
        }  
        .card-pic-me
        {
         height: 200px;
            width: 200px;
        }
         #footer
        {
            height: 50px;
            background-color: coral;
             font-size: 15px;
        
            padding-top: 13px;
        }
        .pointer
        {
            cursor: pointer;
        }
         #waitt {
            display: none;
        }
      .btn-outline-coral
        {
            border: 1px solid coral;
            background-color: white;
            border-radius: 20px;
            color: coral;
        }
      .btn-outline-coral:hover
        {
            border: 1px solid coral;
            background-color: coral;
            border-radius: 20px;
            color: white;
        }
        .backg
        {
            background-image: url("pics/bg1.jpg")
        }
        #info-img
        {
            background-image: url("pics/Info_Button-512.png");
            height: 40px;
            width: 40px;
        }
        #title-image
        {
            height: 400px;
            width: 100%;
            background-image: url("pics/t2.jpeg");
            
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .color-coral
        {
            
            
        }
       
      
      
          .fb-page,
.fb-page span,
.fb-page span iframe[style] {
    max-width: 100% !important;
}
      
      
      
      
      
      
      
      
      
      
      </style>
   <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script type="application/javascript">
        f3=false;
        f2=false;
        f4=false;
        function validateEmail(emailField,err){
            if(emailField.trim()=="")
            {
                f4=false;
                err.innerHTML="Plz enter Email ID";
                err.style.color="red";
                return;
            }
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailField) == false) 
        {
                f4=false;
                err.innerHTML="Plz enter valid Email ID";
                err.style.color="red";
                return;
        }
            else{
                f4=true;
                err.innerHTML="Correct";
                err.style.color="green";
                return;
            }

}
        function chkMobile(mob,err)
    {
        var r=/^[6-9]{1}[0-9]{9}$/;
      //  alert("hello");
        if(mob.trim()=="")
            {
                f3=false;
                err.innerHTML="Plz enter mobile number";
                err.style.color="red";
                return;
            }
			var bool=r.test(mob);
			
			if(bool==true)
         {
             err.innerHTML="correct";
             err.style.color="green";
             f3=true;
         }
          else
            {
            f3=false;
            err.innerHTML="Invalid Mobile number";
                err.style.color="red";
    }
        }
         function chkPassword(pwd,err)
    {
        if(pwd.trim()=="")
            {
                f2=false;
                err.innerHTML="Plz enter Password";
                err.style.color="Red";
            }
        
        if(pwd.length>=8)
            { 
                err.innerHTML="Valid";
                err.style.color="Green"
                f2=true;
            }
        else
            {
                err.innerHTML="Password length must be >=8";
                err.style.color="Red";
                f2=false;
            }

            
    }
      $(document).ready(function(){
            $(document).ajaxStart(function(){
                $("#waitt").show();
            });
            
            $(document).ajaxStop(function(){
                $("#waitt").hide();
            });
      
             $("#signup").click(function(){
                // alert();
                 $a=$("#suid").val();
              //   alert($("#mobile").val().trim());
                 if($("#res").html()!="Available"||f2==false||f3==false||f4==false)
                     {
                         return;
                     }
                 $qs2=$("#signup-form").serialize();
            //   alert($qs2);
                $url="signup-process.php?"+$qs2;
               // alert($url);
                $.get($url,function(response)
                      {
                        //alert(response);
                    $("#result-signup").html(response);
                    });
             });
                 
                 
                  $("#login").click(function(){
                $qs2=$("#login-form").serialize();
                //alert($qs2);
                $url="login-process.php?"+$qs2;
               // alert($.url);
                $.get($url,function(response)
                      {
                     //   alert(response);
                    if(response=="correct")
                        location.href="dashboard.php";
                    else
                    $("#result-login").html(response);
                    });
            
                  });
              $("#forgot").click(function(){
                //  alert();
                $uid=$("#luid").val();
                 //alert($uid);
                $.get("recover-password.php?uid="+$uid,function(response)
                      {
                       // alert(response);
                       $("#result-login").html(response);

                });
            });
             $("#suid").blur(function(){
                
                $uid=$("#suid").val().trim();
                 if($uid=="")
                     {
                         $("#res").html(" User Id cannot be left blank");
                          $("#res").css('color','red');
                         return;
                     }
                $.get("ajax-check-uid.php?uid="+$uid,function(data,status)
                      {
                        
                        $("#res").html(data);
                    if(data=="Available")
                        $("#res").css('color','green');
                    else
                          $("#res").css('color','red');
                });
            });
          
          
          
               });
      
      
      
      
      
      
      
      </script>
  </head>
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   
    
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" id="logo-main">
  <img src="pics/medical-16-512.png" width="45" height="45" class="d-inline-block " alt=""><span id="abc">
      FinancialAssist</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    <form class="form-inline my-2 my-lg-0 col-md-6 offset-md-0 ">
            <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="#about">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#reach">Reach Us</a>
      </li>
     
      
    </ul>
           
    </form>
     <form class="form-inline my-2 my-lg-0 ml-5 col-md-6 ">
      <button class="btn btn-outline-coral offset-md-4  my-2 my-sm-0" type="button" data-toggle="modal"
       data-target="#signup-modal">Signup</button>

      <button class="btn btn-outline-coral  my-2 my-sm-0 ml-3 mr-5" type="button" data-toggle="modal" data-target="#login-modal">Login</button>
      </form>
  </div>
  
</nav>
 <br>
 <br>
 <br>

<div  id="title-image"></div>

     
<div class="backg">
<br>
<br>
<div class="container " >
    
     <div class="row" style="" >
         <div class="col-md-12" id="subheader"><center><h3>Our Services</h3></center>
             </div></div>
             <br>
             <br>
             
             
     <div class="row p-4 bg-transparent" id="main">
          
               <div class="row  bg-transparent">
                <div class="col-md-4">
                <div class="card bg-transparent card1 pointer" data-toggle="modal" data-target="#login-modal">
                    <center> <img class="card-img-top card-pic " src="pics/university-courses-03-001-512.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title ">Manage Accounts</h5>
                        <p class="card-text">You can add your FD accounts and LIC premiums and later view all your accounts at one place....</p>
                    </div>
                </div>
               </div>
            <div class="col-md-4">
                <div class="card bg-transparent card1 pointer" style=" margin: auto"  data-toggle="modal" data-target="#login-modal">
                    <center><img class="card-img-top card-pic" src="pics/pending%20payments.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">View Pending Payments</h5>
                        <p class="card-text">You can get information about all your upcoming payments at one place such as installment amount and due date....</p>
                    </div>
                </div>
            </div>
              <div class="col-md-4">
              <div class="card bg-transparent card1 pointer" data-toggle="modal" data-target="#login-modal">
                    <center>    <img class="card-img-top card-pic " src="pics/Email-Alert-Notification-512.png" alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">Get Notifications</h5>
                        <p class="card-text">You will never miss your deadlines as we give you notifications for your pending payments via email and sms....</p>
                        
                    </div>
                   </div> 
            </div>
         
        </div>
  <br>
  
  
    </div>
  
  <div class="row" id="about">
   <div class="col-md-12" id="subheader"><center><h3>Designed & Developed by</h3></center>
      </div></div>
             <br ><br>
             <br>
             
             <div class="row">
                  <div class="col-md-4 col-sm-12 ">
                <div class="card bg-transparent">
                    <center><img class="card-img-top card-pic-me rounded-circle" src="pics/123.jpg" alt="Card image cap"></center>
                    <div class="card-body">
                        <center><h4 class="card-title">Gurkirat Singh</h4></center>
                       
                    </div>
                </div>
            </div>
                 <div class="col-md-4 bg-transparent col-sm-12">

                   
                <div class="card bg-transparent">
                    <center><img class="card-img-top card-pic-me rounded-circle" src="pics/gurleen2.PNG" alt="Card image cap"></center>
                    <div class="card-body">
                        <h4 class="card-title"><center>Gurleen Kaur</center></h4>
                    
                    </div>
                </div>
            </div>
                 <div class="col-md-4 col-sm-12">

                <div class="card bg-transparent">
                    <center><img class="card-img-top card-pic-me rounded-circle" src="pics/Geetika.jpeg" alt="Card image cap"></center>
                    <div class="card-body">
                        <h4 class="card-title"><center>Geetika</center></h4>
                    
                    </div>
                </div>
            </div>
                 
                 
             </div>
             
             <br>
             <br>
             <div class="row" style="" >
                 <div class="col-md-12" id="subheader"><center><h3>Reach Us</h3></center>
             </div></div>
             <br>
             <br><br>
             <div class="row">
                 <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.9256036416473!2d76.3588820144789!3d30.353064181771117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028abdad39763%3A0xa7f6232cbef903a4!2sTeam+Ultron+MotorSports!5e0!3m2!1sen!2sin!4v1541323056550" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
                  <div class="col-sm-6">
                     <br >
                     <br>
                     <center> <h5>Connect with us on Facebook</h5><br>
                   <div class="fb-page" data-href="https://www.facebook.com/financialAssistant/" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/financialAssistant/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/financialAssistant/">Financial Assist</a></blockquote></div> </center>
                
                 </div>
    
    </div></div> <br id="reach">
    <br></div>
     
    <div class="" id="footer">
		&nbsp; &nbsp;		Copyright	© <?php echo date("Y"); ?>  All Rights Reserved
                   

				</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     <div class="modal fade" tabindex="-1" role="dialog" id="signup-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header color-coral">
                    <h5 class="modal-title">Signup</h5><img id="waitt" src="pics/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form  id="signup-form">
                        <div class="form-group">
                            <div class="row"> <label class="col-3" for="formGroupExampleInput">User id</label><span class="col-9" id="res"></span></div>
                            <input type="text" class="form-control" id="suid" name="uid" required placeholder="User id">
                            </div>
                        <div class="form-group">
                          <div class="row">  <label class="col-3" for="formGroupExampleInput">Password</label><div class="col-9" id="errPwd"></div></div>
                            <input type="password" class=" form-control" id="pwd" onkeyup="chkPassword(this.value,errPwd);" name="pwd" required placeholder="Password"> 
                            </div>
                        <div class="form-group">
                            <div class="row"><label class="col-3" for="formGroupExampleInput">Mobile</label><div class="col-9" id="errMob"></div></div>
                            <input type="number" class="form-control" id="mobile" onblur="chkMobile(this.value,errMob);" name="mobile" placeholder="mobile">
                        </div>
                                             <div class="form-group">
                                                 <div class="row"> <label class="col-3" for="formGroupExampleInput">Email</label><div class="col-9" id="errEmail" ></div></div>
                                                     <input type="text" class="form-control" id="email" onblur="validateEmail(this.value,errEmail);" name="email" placeholder="Email">
                        </div>
                        <center><span id="result-signup" class="text-primary"></span></center>

                    </form>

                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn bg-white" id="signup" name="signup" value="signup">Signup</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
 <div class="modal fade" tabindex="-1" role="dialog" id="login-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Login</h5><img id="waitt" src="pics/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form action="login-process.php" id="login-form">
                        <div class="form-group">
                            <label for="formGroupExampleInput">User id</label><span class="text-danger" id="res">*</span>
                            <input type="text" class="form-control" id="luid" name="uid" placeholder="User id">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="password" class="form-control" id="lpwd" name="pwd" placeholder="Password">
                        </div>
                        
                    
                         <div class="nav-item">
                            <a class="nav-link" id="forgot" href="#">Forgot Password</a>
                        </div>
                        <center><span id="result-login" class="text-primary"></span></center>

                    </form>

                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn bg-white" id="login" name="login" value="login">Login</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    
    
  </body>
</html>