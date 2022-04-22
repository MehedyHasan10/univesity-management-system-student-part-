<?php
include "../model/db.php";


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"tutor_request",$_REQUEST['searchbyarea'],$_REQUEST['searchbyclass+`'],$_REQUEST['searchbysubject']);


if ($userQuery->num_rows > 0) 
{
    echo "<table><tr><th>Name</th><th>Course</th> <th>Area</th> <th>Section</th><th>Code</th><th>Address</th></tr>";
    while($row = $userQuery->fetch_assoc())
    {
      echo "<tr><td>".$row["fullname"]."</td><td>".$row["course"]."</td><td>".$row["area"]."</td><td>".$row["section"]."</td><td>".$row["code"]."</td><td>".$row["contact"]."</td></tr>";
    }
    echo "</table>";
    
} 
 else
    echo "No search results found!!";
  


$connection->CloseCon($conobj);



?>