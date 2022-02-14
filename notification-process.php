<?php

include_once("mysqli-connection.php");
include_once("SMS_OK_sms.php");
$query3="select * from user";
$tabl1=mysqli_query($dbcon,$query3);
while($row2=mysqli_fetch_array($tabl1))
{
    $email=$row2["email"];
    $mobile=$row2["mobile"];
    $a=$row2["uid"];
   // echo $a;
    $query="select * from account where uid='$a' and DATEDIFF(curdate(),d_date)>0";
    $table=mysqli_query($dbcon,$query);

while($row=mysqli_fetch_array($table))
{
   //echo "hello";
   $date=date_create($row["d_date"]);
    $ins=$row["install_period"];
    $sat=$row["details"];
date_add($date,date_interval_create_from_date_string("$ins months"));
$gh=date_format($date,"Y-m-d");
   // echo $gh;
    $query1="update account set d_date='$gh' where uid='$a' and details='$sat'";
    mysqli_query($dbcon,$query1);
}
$query2="select * from account where uid='$a' and DATEDIFF(d_date,CURRENT_DATE)>=0 and DATEDIFF(d_date,CURRENT_DATE)<=reminder;";
$tabl=mysqli_query($dbcon,$query2);


while($row1=mysqli_fetch_array($tabl))
{
 // echo "hello";
    $to =$email;
$subject = "Registration successful";
$body = "Alert!! You have a pending payment of your ".$row1["type"]." account\n
Account Details: ".$row1["details"].
"\nInstallment: ".$row1["install_amount"].
"\nDue Date: ".$row1["d_date"];
//mail($to, $subject, $body);
        SendSMS($mobile,$body);
}
}
?>