<?php
include '../control/requestTutioncheck.php';
?>


<!DOCTYPE html>
<html>

<title>
    Request Tution
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
   <?php
       include '../view/header.php';
?>
</body>

<body>
    <div class="box forTution">

        <h2 class="header">Course Adding</h2>

        <form action="" method="post">
            <div class="jserror">
                <label class="font"> Name </label><br>
                <input type="text" name="name" value="<?php echo $_SESSION["fullname"]; ?>" readonly><br><br>
                <label class="font"> Contact Number</label>
                <input type="text" name="contact" value="<?php echo $contact ?>"><br><br>

                <label class="font"> Select Course</label>
                <select id="course" name="course">

                    <option value="<?php echo $course; ?>"> <?php echo $course; ?></option>

                    <option value="Database">Database</option>
                    <option value="cshap">C#</option>
                    <option value="java">JAVA</option>
                    <option value="cplus">C++</option>


                </select>

                <label class="font"> Select Area</label>
                <select id="area" name="area">
                    <option value="<?php echo $area; ?>"> <?php echo $area; ?></option>

                    <option value="FASS">FASS</option>
                    <option value="CS">CS</option>
                    <option value="EEE">EEE</option>


                </select>
                <br><br>

                <label class="font"> Select Section</label>
                <select id="section" name="section">
                    <option value="<?php echo $section; ?>"> <?php echo $section; ?></option>

                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    

                </select>

                <label class="font"> Select Code</label>
                <select id="code" name="code">
                    <option value="<?php echo $code; ?>"> <?php echo $code; ?></option>

                    <option value="CS-303">CS-303</option>
                    <option value="EEE-401">EEE-401</option>
                    <option value="MATH-101">MATH-101</option>


                
                </select><br><br>

                <label class="font"> Select Time</label>
                <select id="subject" name="subject">
                    <option value="<?php echo $subject; ?>"> <?php echo $subject; ?></option>

                    <option value="8-10">8-10</option>
                    <option value="10-12">10-12</option>
                    <option value="12-2">12-2</option>
                    <option value="2-4">2-4</option>

                </select>

               

            </div>
            <p id="error"> <?php echo $error; ?></p>

            <input type='submit' name='submit' value='Submit' class="button submit">
            <input type='submit' name='update' value='update' class="button submit">
            <input type='submit' name='delete' value='Delete' class="button delete">



            <br> <br> <br> <br> <br>


        </form>

        <br>

        <br>

    </div>

</body>

</html>