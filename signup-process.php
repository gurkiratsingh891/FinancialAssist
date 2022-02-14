 <?php
include_once("mysqli-connection.php");
include_once("SMS_OK_sms.php");
   
   $uid=$_GET["uid"];
    $pwd=$_GET["pwd"];
    $mobile=$_GET["mobile"];
$email=$_GET["email"];

    $query="insert into user(uid,pwd,mobile,email) values('$uid','$pwd','$mobile','$email')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        $to =$email;
$subject = "Registration successful";
$body = "Welcome to FinancialAsist, Thanks for registering with us. We hope you enjoy our services.";
// mail($to, $subject, $body)
        SendSMS($mobile,$body);
        echo "Signup successful...Plz login to continue";
    }
    else
        echo mysqli_error($dbcon);
?>