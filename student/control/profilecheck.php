<?php
include('../model/db.php');
session_start();

 $male=$female=$dob="";
 $username=$password =$fname =$email =$mobileno=$address ="";

 $connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->CheckUser($conobj,"tutor",$_SESSION["logusername"],$_SESSION["logpassword"]);
if($userQuery->num_rows > 0)
{
    while($row = $userQuery->fetch_assoc()) 
    {
        $username=$row["username"];
        $password=$row["password"];
        $fname =$row["fname"];
        $email =$row["email"];
        if(  $row["gender"]=="female" )
       { $female="checked"; }
       else if($row["gender"]=="male")
       { $male="checked"; }
       $mobileno=$row["mobileno"];
       $dob=$row["dob"];
       $address=$row["address"];


    }
      
}
if (isset($_POST['update'])) 
{
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->UpdateProfile($conobj,"tutor",$_SESSION["logusername"],$_POST['fname'],$_POST['email'],$_POST['gender'],$_POST['mobileno'],$_POST['dob'],$_POST['address']);
    if($userQuery==TRUE)
    {
       
        echo " updated"; 
       
    }
    else
    {
        echo "could not update";    
    }
    $connection->CloseCon($conobj);
    
    
    
 }

 