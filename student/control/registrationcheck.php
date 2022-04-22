<?php
include '../model/db.php';

$valusername = $valpass = $valfname = $valemail = $valgender = $valmobileno = $valdob = $valaddress = $error = "";

if (isset($_POST['submit']))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    if (isset($_POST['gender']))
    {
        $gender = $_POST["gender"];
    }

    $mobileno = $_POST["mobileno"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];

    if (!empty($_POST["username"]) && (strlen($_POST["username"]) > 5))
    {
        if (!empty($_POST["password"]) && (strlen($_POST["password"]) > 4))
        {
            if (!empty($_POST["fname"]) && strlen($_POST["fname"]) > 5 && !preg_match("/[^A-Za-z\s.]/", $fname))
            {
                if (!empty($_POST["email"]))
                {
                    if (isset($_POST["gender"]))
                    {
                        if (!empty($_POST["mobileno"]) && strlen($_POST["mobileno"]) > 5 && !preg_match("/[^0-9+-]/", $mobileno))
                        {
                            if (!empty($_POST["dob"]))
                            {
                                if (!empty($_POST["address"]) && strlen($_POST["address"]) > 10)
                                {
                                    $connection = new db();
                                    $conobj = $connection->OpenCon();

                                    $userQuery = $connection->insertuser($conobj, "tutor", $username, $password, $fname, $email, $gender, $mobileno, $dob, $address);
                                    if ($userQuery === true)
                                    {
                                        $error = "Data Inserted!!!";
                                    }
                                    else
                                    {
                                        $error = "Data is not inseted!!!" . $conobj->error;
                                    }
                                    $connection->CloseCon($conobj);

                                }
                                else
                                {
                                    $valaddress = "Enter Your Address properly!!";
                                }

                            }
                            else
                            {
                                $valdob = "Enter Date of Birth properly!!";
                            }

                        }
                        else
                        {
                            $valmobileno = "Enter Mobile No properly!!";
                        }

                    }
                    else
                    {
                        $valgender = "please select at least one radio";
                    }

                }
                else
                {
                    $valemail = "Fill Up Email properly!!";
                }

            }
            else
            {
                $valfname = "Fill Up Full Name properly!!";
            }

        }
        else
        {
            $valpass = "Fill up Password properly!!";
        }

    }
    else
    {
        $valusername = "Fill up UserName properly!!";
    }

}
