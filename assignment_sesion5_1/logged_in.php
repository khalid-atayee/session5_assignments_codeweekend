<?php 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data = [
        'user_fname'=>$_POST['user_fname'],
        'user_lname'=>$_POST['user_lname'],
        'user_email'=>$_POST['user_email'],
        'user_phone'=>$_POST['user_phone']
    ];
    
    // var_dump($data);
    $_SESSION['user']=$data;
    $_SESSION['authenticated']=true;
    header('location:dashboard.php');

}

