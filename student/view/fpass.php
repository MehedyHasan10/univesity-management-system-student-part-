
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
        <h2 class="header">Recovery Password</h2>
        <br><br>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Enter your email">  
              <br><br><br>
        

        
            <input name="submit" type="submit" value="Submit" class="button submit">
        </form>

        <?php


	if (isset($_POST['submit'])){

		$to_email = $_POST['email'];

		$connection = mysqli_connect('localhost','root','','project');

		$query = "SELECT * FROM tutor WHERE email='$to_email'";

		$result = mysqli_query($connection, $query);

		$count = mysqli_num_rows($result);

		if($count > 0){

			while($row = mysqli_fetch_assoc($result)){

			$Rec_password = $row['password'];


				$subject = "Password Recovery.";
				$body = "Your pass is : $Rec_password";
				$headers = "From: mehedisiam13@gmail.com";



				if(mail($to_email, $subject, $body, $headers)){
					echo "Pssword recover failed...";
					//echo "Your password successfully sent to :".$to_email ;
				}else{
					//echo "Pssword recover failed...";
					
					echo "Your password successfully sent to :".$to_email ;
				}

			}

		
		}


		else{
			echo "Please enter the Email..";
		}

	}

?>

        
    </div>


</body>

</html>






	