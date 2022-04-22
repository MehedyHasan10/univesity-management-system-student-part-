
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
     <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>
     <?php
       include '../view/header.php';
?>

<div class="box login">
    <h2 class="header">Assignment Upload</h2>
 
 <form method="post" enctype="multipart/form-data">
                





                   <label class="font">User Name</label>
                   <input type="text" name="title"><br><br>


                   <label class="font">File Upload</label>
                   <input type="File" name="file"><br><br>



                <input type='submit' name='submit' value='Submit' class="button submit">

            </form>

            <?php 
$localhost = "localhost"; 
$dbusername = "root"; 
$dbpassword = "";  
$dbname = "assig";  
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
   // move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
  
    echo " <br><br>........File Sucessfully uploaded.....";
    }
    else{
        echo "Error";
    }
}
 
 
?>
</div>
 
</body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
       include '../view/footer.php';
       ?>
</html>






 
