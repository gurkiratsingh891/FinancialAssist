<?php

include_once("mysqli-connection.php");
include_once("session.php");
$a=$_SESSION["uid"];
$type=$_GET["type"];
if($type==1)
$query="select * from account where uid='$a' and DATEDIFF(d_date,CURRENT_DATE)>=0 and DATEDIFF(d_date,CURRENT_DATE)<=10;";
else
    $query="select * from account where uid='$a' and type='$type' and DATEDIFF(d_date,CURRENT_DATE)>=0 and DATEDIFF(d_date,CURRENT_DATE)<=10;";


$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);
?>