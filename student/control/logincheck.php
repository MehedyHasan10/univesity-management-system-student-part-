<?php
include '../model/db.php';
session_start();
$error = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['logusername']) || empty($_POST['logpassword'])) 
    {
        $error = "Fill Up Usernname or Password!!";
    } 
    else 
    {
        $logusername = $_POST['logusername'];
        $logpassword = $_POST['logpassword'];

        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "tutor", $logusername, $logpassword);

        if ($userQuery->num_rows > 0) {
            $_SESSION["logusername"] = $logusername;
            $_SESSION["logpassword"] = $logpassword;
            while($row = $userQuery->fetch_assoc()) {
                $_SESSION["fullname"]=$row["fname"];
                
            }

        } else {
            $error = "Username or Password is invalid";
        }
        $connection->CloseCon($conobj);

    }

    //set cookie

     if(!empty($_POST['remember_checkbox'])){

        $remember_checkbox=$_POST['remember_checkbox'];

        setcookie('logusername',$logusername,time()+30);
        setcookie('logpassword',$logpassword,time()+30);

     }


     else
     {

        setcookie('logusername',$logusername,30);
        setcookie('logpassword',$logpassword,30);

     }


}



?>