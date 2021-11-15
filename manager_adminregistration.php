<!DOCTYPE html>
<html>
    <head>
        <title>Admin Registration</title>
    </head>

    <body>
        <fieldset>
            <legend align="center"><h1>Admin Registration</h1></legend>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td><span>Name:</span> </td>
                            <td><input type="text" value="" placeholder="Name" name="name"> </td>
                        </tr>

                        <tr>
                            <td><span>Username:</span> </td>
                            <td><input type="text" value="" placeholder="Username" name="uname"> </td>
                        </tr>
                        
                        <tr>
                            <td><span>Password:</span></td>
                            <td><input type="password" placeholder="Password" name="password"></td>
                        </tr>

                        <tr>
                            <td><span>Confirm Password:</span></td>
                            <td><input type="password" placeholder="Confirm Password" name="cpassword"></td>
                        </tr>
                        <tr>
                            <td><span>Gender:</span></td>
                            <td><input type="radio"  name="gender">Male<input type="radio"  name="gender">Female </td>
                        </tr>
                        <tr>
                            <td><span>Email:</span></td>
                            <td><input type="email" placeholder="Email" value="" name="email"></td>
                        </tr>

                        <tr>
                            <td><span>Phone Number:</span></td>
                            <td><input  type="number" placeholder="Phone Number" value="" name="phonenumber"></td>
                        </tr>
                        <tr>
                            <td><span>Address:</span></td>
                            <td><textarea placeholder="Address" value="" name="address"></textarea></td>
                        </tr>
    
                        <tr>
                            <td colspan="3" align="center"><input type="submit" value="Submit" name="submit">
                        </tr>
                    </table>
                </form>
        </fieldset>
    </body>
</html>