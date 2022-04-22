<?php
include '../control/securitycheck.php';
?>


<!DOCTYPE html>
<html>

<title>
    Security
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">

</head>

<body>
    <?php
       include '../view/header.php';
?>
    


    <body>
        <div class="box security">
           
            <h2 class="header">Password Change</h2>

            <form name="security" action="" onsubmit="return securityvalidation()" method="post">
                <div class="jserror">


                    <label class="font">Old Password</label>
                    <input type='password' name='oldpassword' id="oldpassword">
                    <br>
                    <p id="oldpassworderror"></p>


                    <label class="font">New Password</label>
                    <input type='password' name='newpassword' id="newpassword">
                    <br>
                    <p id="newpassworderror"></p>


                    <label class="font">Confirm Password</label><br>
                    <input type='password' name='confirmpassword' id="confirmpassword">
                    <br>
                    <p id="confirmpassworderror"></p>



                </div>


                <input type='submit' name='submit' value='Confirm' class="button submit">

            </form>

            <br>
            <p id="error"> <?php echo $error; ?></p>
            <br>

        </div>
        <script src="../js/securityvalidation.js"></script>

    </body>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
       include '../view/footer.php';
       ?>

</html>