<?php
include '../control/registrationcheck.php';
?>


<!DOCTYPE html>
<html>

<title>
    Registration
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
    <div class="box registration">
        <a class="back" href="login.php"><img src="../resources/back.png" class="back"></a>
      

        <h2 class="header">REGISTRATION</h2>

        <form name="registrationForm" action="" onsubmit="return validateForm()" method="post">
            <div class="jserror">
                <label class="font"> User Name</label>
                <input type='text' name='username' id="username" placeholder="Minimum length 5">
                <p id='usernameerror'></p>
                <?php echo $valusername; ?>


                <label class="font"> Password</label>
                <input type='password' name='password' id="password" placeholder="Minimum length 5 digits">
                <p id="passworderror"></p>
                <?php echo $valpass; ?>


                <label class="font"> Full Name</label>
                <input type='text' name='fname' id="fname" placeholder="Enter Full Name">
                <p id="fnameerror"></p>
                <?php echo $valfname; ?>


                <label class="font"> E-mail</label><br>
                <input type='text' name='email' id="email" placeholder="Enter E-mail">
                <p id="emailerror"></p>
                <?php echo $valemail; ?>


                <label class="font"> Gender</label>
                <input type='radio' name='gender' id="male" value="male">
                <label for="Male">Male</label>
                <input type='radio' name='gender' id="female" value="female">
                <label for="Female">Female</label>
                <p id="gendererror"></p>
                <?php echo $valgender; ?>


                <label class="font"> Mobile Number</label>
                <input type='text' name='mobileno' id="mobileno" placeholder="Enter Mobile Number">
                <p id="mobilenumbererror"></p>
                <?php echo $valmobileno; ?>


                <label class="font"> Date of Birth</label>
                <input type='date' id="dob" name="dob">
                <p id="doberror"></p>
                <?php echo $valdob; ?>


                <label class="font"> Address</label><br>
                <input type='text' name='address' id="address" placeholder="Enter Address">
                <p id="addresserror"></p>
                <?php echo $valaddress; ?>
            </div>

            <input type='submit' name='submit' value='Submit' class="button submit">

        </form>

        <br>
        <?php echo $error; ?>
        <br>

    </div>
    <script src="../js/formvalidation.js"></script>
</body>

</html>