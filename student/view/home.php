<?php

session_start();

if (empty($_SESSION["logusername"])) {
    header("Location:login.php");
}
?>


<!DOCTYPE html>
<html>
<title>
    Home
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
      <?php
       include '../view/header.php';
?>
    
    <span>Hellow,</span>
    <span><?php echo $_SESSION["fullname"];?> </span>
</body>

<body>
    

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
       include '../view/footer.php';
       ?>



   

   

    <script src="../js/ajaxsearch.js"></script>
</body>

    






</html>