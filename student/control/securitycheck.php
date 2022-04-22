<?php
include '../model/db.php';
session_start();


$error = "";

if (isset($_POST['submit'])) {
    
        $oldpassword = $_POST['oldpassword'];

        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "tutor", $_SESSION["logusername"], $oldpassword);

        if ($userQuery->num_rows > 0) 
        {
            if($_POST['newpassword']==$_POST['confirmpassword'])
            { 
                
                $userQuery=$connection->UpdatePassword($conobj,"tutor",$_SESSION["logusername"],$_POST['newpassword']);
                if($userQuery==TRUE)
                {
       
                    $error = " Password Updated"; 
       
                }
                else
                {
                    $error = " Password did not Updated";   
                }
                
                
            }
            else
                $error = "New Password Didnot match";

        } 
        
        else 
        {
            $error = " Password is invalid";
        }
        $connection->CloseCon($conobj);

  
}