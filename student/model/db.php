<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
 

     function CheckUser($conn,$table,$logusername,$logpassword)
    {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $logusername."' AND password='". $logpassword."'");
    return $result;
    }
    function CheckTutionRequest($conn,$table,$logusername)
    {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $logusername."' ");
    return $result;
    }


    function ShowAll($conn,$table)
    {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
     }


    function insertuser($conn,$table,$username,$password,$fname,$email,$gender,$mobileno,$dob,$address)
    {
        $result = $conn->query("INSERT INTO $table (username,password,fname,email,gender,mobileno,dob,address) VALUES ('$username','$password','$fname','$email','$gender','$mobileno','$dob','$address')  ");
        return $result;
    }

   



    function UpdateProfile($conn,$table,$username,$fname,$email,$gender,$mobileno,$dob,$address)
    {
        $sql = "UPDATE $table SET fname='$fname', email='$email', gender='$gender',mobileno='$mobileno',dob='$dob',address='$address' WHERE username='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }


    function UpdatePassword($conn,$table,$username,$newpassword)
    {
        $sql = "UPDATE $table SET password='$newpassword' WHERE username='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }

    function InsertTutionRequest($conn,$table,$username,$fname,$course,$area,$section,$code,$subject,$contact)
    {
        $result = $conn->query("INSERT INTO $table (username,fname,course,area,section,code,subject,contact) VALUES ('$username','$fname','$course','$area','$section','$code','$subject','$contact')  ");
        return $result;
    }


    function UpdateTutionRequest($conn,$table,$username,$course,$area,$section,$code,$subject,$contact)
    {
        $sql = "UPDATE $table SET course='$course', area='$area', section='$section',code='$code',subject='$subject',contact='$contact' WHERE username='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }
    function DeleteTutionRequest($conn,$table,$username)
    {
        $sql = "DELETE FROM $table WHERE username='$username'";
        if ($conn->query($sql) === TRUE) {
            $result= TRUE;
        } else {
            $result= FALSE ;
        }
        return  $result;
    }




    function Search($conn,$table,$searchbyarea,$searchbycode,$searchbysubject) {

        if($searchbyarea!="" && $searchbycode=="" && $searchbysubject=="")
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE area LIKE '%". $searchbyarea."%' ");            
        }
        else if($searchbyarea=="" && $searchbycode!="" && $searchbysubject=="")
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE code LIKE '%". $searchbycode."%' ");
        }
        else if($searchbyarea=="" && $searchbycode=="" && $searchbysubject!="")
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE subject LIKE '%". $searchbysubject."%'  ");
        }


        else if($searchbyarea=="" && $searchbycode!="" && $searchbysubject!="")
            {
                $result = $conn->query("SELECT * FROM ". $table." WHERE code LIKE '%". $searchbycode."%' AND subject LIKE '%". $searchbysubject."%' ");
            }
        else if($searchbyarea!="" && $searchbycode=="" && $searchbysubject!="")
            {
                $result = $conn->query("SELECT * FROM ". $table." WHERE area LIKE '%". $searchbyarea."%' AND subject LIKE '%". $searchbysubject."%'");
            }
        else if($searchbyarea!="" && $searchbycode!="" && $searchbysubject=="")
            {
                $result = $conn->query("SELECT * FROM ". $table." WHERE area LIKE '%". $searchbyarea."%' AND code LIKE '%". $searchbycode."%' ");
            }
            
                  
        else if($searchbyarea!="" && $searchbycode!="" && $searchbysubject!="")
            {
                $result = $conn->query("SELECT * FROM ". $table." WHERE area LIKE '%". $searchbyarea."%' AND code LIKE '%". $searchbycode."%' AND subject LIKE '%". $searchbysubject."%'");
            }
        else if($searchbyarea=="" && $searchbycode=="" && $searchbysubject=="")
            {
                $result = $conn->query("SELECT * FROM ". $table." WHERE area ='' AND code=''  AND subject='' ");
            }
       
        
        return $result;          
    }

    function CloseCon($conn)
    {
        $conn -> close();
    }
}
?>