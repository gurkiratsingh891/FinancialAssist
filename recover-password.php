<?php
include_once("mysqli-connection.php");
    include_once("SMS_OK_sms.php");

$uid=$_GET["uid"];
$query="select pwd,mobile from user where uid='$uid'";

$table=mysqli_query($dbcon,$query);

$count=mysqli_num_rows($table);

if($count==0)
{
    echo "$uid Invalid id";
}
else
{
    $row=mysqli_fetch_array($table);
//echo "oke";
//echo SendSMS($_GET["mobile"],$_GET["msg"]);
echo SendSMS($row["mobile"],"Your password is".$row["pwd"]);
/*    $to = $row["email"];
$subject = "Forgot password";
$body = "Your password is".$row["pwd"];
if (mail($to, $subject, $body)) {
echo("<p>Email successfully sent!</p>");
} else {
echo("<p>Email delivery failed…</p>");
}*/
}



?>