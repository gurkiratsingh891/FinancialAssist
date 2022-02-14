<?php

include_once("mysqli-connection.php");
include_once("session.php");
$a=$_SESSION["uid"];
$year=$_GET["year"];
$type=$_GET["type"];
$b=$year+1;
if($type==1&&$year==2)
 $query="select * from account where uid='$a'";
else if($type==1&&$year!=2)
     $query="select * from account where uid='$a' and s_date >= '$year-01-01 00:00:00' 
       and s_date < '$b-01-01 00:00:00'";
else if($type!=1&&$year==2)
    $query="select * from account where uid='$a' and type='$type'";
    else
         $query="select * from account where uid='$a' and type='$type' and s_date >= '$year-01-01 00:00:00' 
       and s_date < '$b-01-01 00:00:00'";


$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);
?>