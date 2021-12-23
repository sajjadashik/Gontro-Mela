<?php
	require_once('Connection.php');
        $name="";
        $err_name="";
        $uname="";
        $err_uname="";
        $password="";
        $err_pass="";
        $cpassword="";
        $err_cpass="";
        $gender="";
        $err_gender="";
        $email="";
        $err_email="";
        $phonenumber="";
        $err_number="";
        $address="";
        $err_address="";
        $haserror=false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["name"])) 
            {
                $err_name = "*Name is Required";
                $haserror=true;
            } 
            else 
            {
                $name = htmlspecialchars($_POST["name"]);
            }
            if (empty($_POST["uname"])) 
            {
                $err_uname = "*User Name is Required";
                $haserror=true;
            } 
            else 
            {
                $uname = htmlspecialchars($_POST["uname"]);
            }
            if (empty($_POST["password"])) 
            {
                $err_pass = "*Password is Required";
            } 
            else if (strlen($_POST["password"]) < 8) 
            {
                $err_pass = "*Password should be at least 8 characters";
                $haserror=true;
            }
            else 
            {
                $password = $_POST["password"];
            }
            if (empty($_POST["cpassword"])) 
            {
                $err_cpass = "*Confirm Password is Required";
                $haserror=true;
            } 
            else
            {
                if ($_POST["password"] == $_POST["cpassword"]) 
                {
                    $cpassword = $_POST["cpassword"];
                } 
                else 
                {
                    $err_cpass = "*Password & Confirm Password Is Not Same";
                    $haserror=true;
                }
            }
           
            if (!isset($_POST["gender"])) 
            {
                $err_gender = "*Gender is Required";
                $haserror=true;
            }
            else
            {
                $gender = $_POST["gender"];
            }
            if (empty($_POST["email"])) 
            {
                $err_email = "*Email is Required";
                $haserror=true;
            } 
            else 
            {
                $email= htmlspecialchars($_POST["email"]);
            }
            if (empty($_POST["phonenumber"])) 
            {
                $err_number = "*Phone Number is Required";
                $haserror=true;
            } 
            else if(!is_numeric($_POST["phonenumber"]))
            {
                $err_number="Invalid Phone Number";
		        $haserror=true;
            }
           else if (strlen($_POST["phonenumber"]) == 10) 
            {
                $err_number = "*Phone Number should be 11 characters";
                $haserror=true;
            }
            else 
            {
                $phonenumber= htmlspecialchars($_POST["phonenumber"]);
            }
            if (empty($_POST["address"])) 
            {
                $err_address = "*Address is Required";
                $haserror=true;
            } 
            else 
            {
                $address= htmlspecialchars($_POST["address"]);
            }
            if($hasError == false)
			{
                $sql = "INSERT INTO registration(Name,Username,Password,cPassword,Gender,Email,Phone,Address) VALUES ('$name','$uname','$password','$cpassword','$gender','$email','$phonenumber','$address')";
				$result = mysqli_query($conn, $sql);
				if($result)
				{
					header("Location: login.php");
				}
				else
				{
					echo "Error :".$sql;
				}
            }
        }    
?>