<?php 
require('login_check_point.php');
if(!login_checker())
{
    header('location:login.php');
}


?>
<h3>Welcome to Dashboard <span style="color:red"> Mr. <?php echo $_SESSION['user']['user_lname']?> </span>  You are Successfully logged in Congratulations</h3>