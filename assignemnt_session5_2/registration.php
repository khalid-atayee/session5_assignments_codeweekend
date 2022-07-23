<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

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
   
        <form action="backend_registration.php" method="post" enctype="multipart/form-data">
            <div class="form-data">
                <label for="">name</label><br>
                <input type="text" name="user_name" class="user" placeholder="Enter your name" >
            </div>

            <div class="form-data">
                
                <label for="">age</label><br>
                <input type="text" name="user_age" class="user" placeholder="Enter your age" >
            </div>

            <div class="form-data">
                
                <label for="">Email</label><br>
        
                <input type="text" name="user_email" class="user" placeholder="Enter your passsword" >
            </div>

            <div class="form-data">
                
                <label for="">password</label><br>
        
                <input type="password" name="user_password" class="user" placeholder="Enter your passsword" >
            </div>


            <div class="form-data">
                
                <label for="">choose your image</label><br>
        
                <input type="file" name="user_image" class="user">
            </div>




            <input type="submit" value="Register" class="user_login_btn">

        </form>
    </div>

</div>

    
</body>
</html>