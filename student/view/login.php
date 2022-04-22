<?php
include '../control/logincheck.php';
if (isset($_SESSION['logusername'])) {
    header("location:home.php");
}
?>


<!DOCTYPE html>
<html>
<title>
    Log In
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
    <div class="box login">
       <!-- <img src="../resources/login.png" class="image">-->
        <h2 class="header">LOGIN</h2>
        <br><br>
        <form action="" method="post" >
            <input type="text" name="logusername" placeholder="Enter UserName" required value="<?php if(isset($_COOKIE['logusername'])) { echo $_COOKIE['logusername'] ;}; ?>">    <br><br><br>




            <input type="password" name="logpassword" placeholder="Enter Password"  required value="<?php if(isset($_COOKIE['logpassword'])) { echo $_COOKIE['logpassword'] ;}; ?>"><br><br>




            <?php
            if(!empty($error))
            {
                echo "<p id='error'> $error. </p>";
            }
            ?>


            <input type="checkbox" name="remember_checkbox"> Remember Me  <br><br>
            <input name="submit" type="submit" value="LOGIN" class="button submit">
        </form>

        
        <p> <a href="fpass.php">Recovery Password</a> </p> 
        <p> <a href="about.php">Need Help</a> </p> 
        <br><br><br><br><br><br><br><br><br>
        <p id="register"> <a href="registration.php">Register Now </a> </p><br>

        
    </div>
</body>

</html>