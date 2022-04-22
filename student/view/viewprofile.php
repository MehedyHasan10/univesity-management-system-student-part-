<?php
include '../control/profilecheck.php';
?>

<!DOCTYPE html>
<html>
<title>
    View Profile
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
   
    <?php
       include '../view/header.php';
     ?>



    <div class="box registration">

        <h2 class="header">Profile</h2>

        <form action="" method="post">
            <div class="jserror">
                <label class="font"> User Name</label><br>
                <input type='text' name='username' value="<?php echo $username; ?>" readonly>
                <br><br>

                <label class="font"> Full Name</label><br>
                <input type='text' name='fname' value="<?php echo $fname; ?>" readonly>
                <br><br>

                <label class="font"> E-mail</label><br>
                <input type='text' name='email' value="<?php echo $email ; ?>" readonly>
                <br><br>

                <label class="font"> Gender</label>
                <input type='radio' name='gender' id="male" value="male" <?php echo $male; ?> readonly>
                <label for="Male">Male</label>
                <input type='radio' name='gender' id="female" value="female" <?php echo $female; ?> readonly>
                <label for="Female">Female</label>
                <br><br>


                <label class="font"> Mobile Number</label><br>
                <input type='text' name='mobileno' value="<?php echo $mobileno; ?>" readonly>
                <br><br>

                <label class="font"> Date of Birth</label><br>
                <input type='date' id="dob" name="dob" value="<?php echo $dob; ?>" readonly>
                <br><br>

                <label class="font"> Address</label><br>
                <input type='text' name='address' value="<?php echo  $address; ?>" readonly>
                <br><br>

            </div>


        </form>





    </div>



</body>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
       include '../view/footer.php';
       ?>


</html>