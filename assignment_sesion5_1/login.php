<?php
require('login_check_point.php');
if(login_checker())
{
    header('location:dashboard.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .container{
           margin-top: 6em;
        }   

        .form-data{
            padding: 1em;
        }
        label{
            font-size: 1.5rem;
       
        }
        .user{
            padding: 1em;
            width: 100%;
        }
        .wrapper {
            width: 40%;
            margin: 0 auto;
     
        }

        .user_login_btn
        {
            padding:15px 45px;
            font-size: 1rem;
            margin-left: 1em;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="wrapper">
   
        <form action="logged_in.php" method="post">
            <div class="form-data">
                <label for="">First name</label><br>
                <input type="text" name="user_fname" class="user" placeholder="Enter your first name" >
            </div>

            <div class="form-data">
                
                <label for="">Last name</label><br>
                <input type="text" name="user_lname" class="user" placeholder="Enter your last name" >
            </div>

            <div class="form-data">
                
                <label for="">Email</label><br>
        
                <input type="email" name="user_email" class="user" placeholder="Enter your email" >
            </div>

            <div class="form-data">
                
                <label for="">phone No</label><br>
        
                <input type="text" name="user_phone" class="user" placeholder="Enter your phone no" >
            </div>
                

            <input type="submit" value="Log in" class="user_login_btn">

        </form>
    </div>

</div>

    
</body>
</html>