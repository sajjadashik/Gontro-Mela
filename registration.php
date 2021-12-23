<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- font awsome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
  
    <link rel="stylesheet" href="style.css">
    <!-- title icon -->
    <link rel="shortcut icon" type="image/png" href="image/logo.jpg">
    <title>Registration</title>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <?php
        include('registration_code.php');
    ?>
    </head>


  <body>
  <?php include('header.php'); ?>

<br> <br> <br> <br>
<div class="regis ">
            <legend ><h1>Registration</h1></legend>
                <form action="" method="POST">
                    <table >
                        <tr>
                            <td><span>Name:</span> </td>
                            <td><input class="txt_field" type="text" value="" placeholder="Name" name="name"><br> <span style="color: red;"><?php echo $err_name;?> </span> </td>
                        </tr>

                        <tr>
                            <td><span>Username:</span> </td>
                            <td><input class="txt_field" type="text" value="" placeholder="Username" name="uname"><br> <span style="color: red;"><?php echo $err_uname;?> </span> </td>
                        </tr>
                        
                        <tr>
                            <td><span>Password:</span></td>
                            <td><input class="txt_field" type="password" placeholder="Password" name="password"><br><span style="color: red;"><?php echo $err_pass;?> </span></td>
                        </tr>

                        <tr>
                            <td><span>Confirm Password:</span></td>
                            <td><input class="txt_field" type="password" placeholder="Confirm Password" name="cpassword"><br> <span style="color: red;"><?php echo $err_cpass;?> </span></td>
                        </tr>
                        <tr>
                            <td><span>Gender:</span></td>
                            <td><input class="gender"  type="radio" value="Male" name="gender">Male &nbsp<input type="radio" value="Female" name="gender">Female <br> <span style="color: red;"><?php echo $err_gender; ?></span> </td>
                        </tr>
                        <tr>
                            <td><span>Email:</span></td>
                            <td><input class="txt_field" type="email" placeholder="Email" value="" name="email"><br> <span style="color: red;"><?php echo $err_email;?> </span></td>
                        </tr>

                        <tr>
                            <td><span>Phone Number:</span></td>
                            <td><input class="txt_field"  type="text" placeholder="Phone Number" value="" name="phonenumber"><br> <span style="color: red;"><?php echo $err_number;?> </span></td>
                        </tr>
                        <tr>
                            <td><span>Address:</span></td>
                            <td><textarea class="txt_field" placeholder="Address" value="" name="address"></textarea><br> <span style="color: red;"><?php echo $err_address;?> </span></td>
                        </tr>
    
                        <tr>
                            <td colspan="3" ><input class="btn-outline-success m-1 submit" type="submit" value="Submit" name="submit">
                        </tr>
                    </table>
                </form>

    </div>      
      <br> <br> <br>
     
        <?php include('footer.html'); ?>

    <div>
       
 
    </div>
    </body>
</html>