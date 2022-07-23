<?php 
session_start();

$user_name = $_POST['user_name'];
$user_age = $_POST['user_age'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$user_image=$_FILES['user_image'];
// var_dump($user_image);

$data =  [
    'user_name'=>$user_name,
    'user_age'=>$user_age,
    'user_email'=>$user_email,
    'user_password'=>$user_password
];

$user_image_name = $user_image['name'];
$user_image_type = $user_image['type'];
$user_image_tmp_name = $user_image['tmp_name'];
$user_imgae_size = $user_image['size'];
$_SESSION['user']=$data;
$_SESSION['user_image_name']=$user_image_name;
$_SESSION['user_image_tmp_name']=$user_image_tmp_name;

move_uploaded_file($user_image_tmp_name,'user_images/'.$user_image_name);

header('location:profile.php');

