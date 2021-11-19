<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>

        <?php
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
            if($hasError == false){
                //database info
            }
        }    
        ?>
    </head>

    <body>
        <fieldset>
            <legend align="center"><h1>Admin Registration</h1></legend>
                <form action="manager_adminregistration_code.php" method="post">
                    <table align="center">
                        <tr>
                            <td><span>Name:</span> </td>
                            <td><input type="text" value="" placeholder="Name" name="name"><br> <span style="color: red;"><?php echo $err_name;?> </span> </td>
                        </tr>

                        <tr>
                            <td><span>Username:</span> </td>
                            <td><input type="text" value="" placeholder="Username" name="uname"><br> <span style="color: red;"><?php echo $err_uname;?> </span> </td>
                        </tr>
                        
                        <tr>
                            <td><span>Password:</span></td>
                            <td><input type="password" placeholder="Password" name="password"><br><span style="color: red;"><?php echo $err_pass;?> </span></td>
                        </tr>

                        <tr>
                            <td><span>Confirm Password:</span></td>
                            <td><input type="password" placeholder="Confirm Password" name="cpassword"><br> <span style="color: red;"><?php echo $err_cpass;?> </span></td>
                        </tr>
                        <tr>
                            <td><span>Gender:</span></td>
                            <td><input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female <br> <span style="color: red;"><?php echo $err_gender; ?></span> </td>
                        </tr>
                        <tr>
                            <td><span>Email:</span></td>
                            <td><input type="email" placeholder="Email" value="" name="email"><br> <span style="color: red;"><?php echo $err_email;?> </span></td>
                        </tr>

                        <tr>
                            <td><span>Phone Number:</span></td>
                            <td><input  type="text" placeholder="Phone Number" value="" name="phonenumber"><br> <span style="color: red;"><?php echo $err_number;?> </span></td>
                        </tr>
                        <tr>
                            <td><span>Address:</span></td>
                            <td><textarea placeholder="Address" value="" name="address"></textarea><br> <span style="color: red;"><?php echo $err_address;?> </span></td>
                        </tr>
    
                        <tr>
                            <td colspan="3" align="center"><input type="submit" value="Submit" name="submit">
                        </tr>
                    </table>
                </form>
        </fieldset>
    </body>
</html>