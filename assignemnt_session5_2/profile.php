<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>

<h4>Your Name is, <span style="color:red"> <?php echo $_SESSION['user']['user_name'] ?></span></h4>
<h4>Your age is, <span style="color:red"><?php  echo $_SESSION['user']['user_age']?></span></h4>
<h4>Your email is, <span style="color:red"><?php  echo $_SESSION['user']['user_email']?></span></h4>
<h4>Your password is, <span style="color:red"><?php  echo $_SESSION['user']['user_password']?></span></h4>
<br><br>

<img src="user_images/<?php echo $_SESSION['user_image_name']  ?>" alt="">
    
</body>
</html>