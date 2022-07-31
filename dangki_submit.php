<?php
include 'config.php';

if( isset($_POST['username']) && $_POST["username"] != '' && $_POST["phone"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '')
{
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $level=0;

    if( $password != $repassword){
      header("location:dangki.php");
    }else{
    header('location:login.php');
          }
  $sql = "SELECT * FROM user WHERE username='$username' ";
  $old = mysqli_query($conn, $sql);
  $password = md5($password);

  if(mysqli_num_rows($old) > 0 ){
    header("location: dangki.php");
  } else{

      $sql = "INSERT INTO user (username,phone,password) VALUES ('$username','$phone','$password') ";
      $query = mysqli_query($conn,$sql);
      if($query){
        header('locaion: login.php');
                }
    }
}
?>