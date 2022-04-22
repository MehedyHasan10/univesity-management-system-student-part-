<?php
include "../model/db.php";
session_start();


$error=$contact="";
$area="Select Area";
$section="Select Section";
$code="Select code";
$subject="Select Time";
$course="Select Course";

$connection = new db();
$conobj=$connection->OpenCon();


if(isset($_POST['submit'])){

    $userQuery = $connection->InsertTutionRequest($conobj, "tuition_request", $_SESSION["logusername"],$_POST['name'],$_POST['course'],$_POST['area'],$_POST['section'],$_POST['code'],$_POST['subject'],$_POST['contact']);
    if ($userQuery === true)
    {
        $error = "Request has been placed!!!";             
    }
    else
    {
        $error = "Already Submitted!!!" ;
    }
    
}





if (isset($_POST['update'])) {
    
    
    $userQuery=$connection->UpdateTutionRequest($conobj,"tuition_request",$_SESSION["logusername"],$_POST['course'],$_POST['area'],$_POST['section'],$_POST['code'],$_POST['subject'],$_POST['contact']);
    if($userQuery==TRUE)
    {      
        $error = " Request has been placed";      
    }
    else
    {
        $error = " request has not been placed";    
    }
    
 }

 if(isset($_POST['delete'])){

    $userQuery = $connection->DeleteTutionRequest($conobj, "tuition_request", $_SESSION["logusername"]);
    if ($userQuery === true)
    {
        $error = "Request has been Deleted!!!";
     
    }
    else
    {
        $error = "Request  of delete failed!!!" ;
    }
    

}


$userQuery=$connection->CheckTutionRequest($conobj,"tuition_request",$_SESSION["logusername"]);
if($userQuery->num_rows > 0)
{
    while($row = $userQuery->fetch_assoc())
     {
        
        $course=$row["course"];
        $area=$row["area"];
        $section=$row["section"];
        $code=$row["code"];
        $subject=$row["subject"];
        $contact=$row["contact"];
     }
       
}