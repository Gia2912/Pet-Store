<?php
include 'config.php';

if(isset($_POST["username"])) {
$username = $_POST["username"];
$password = $_POST["password"];
$password = md5($password);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
$checkname = mysqli_num_rows($query);
		if($checkname > 0){
				if($data['level']!=1){
					$_SESSION['user'] = $data;
					header ('location: index.php');
				
					}else{
					header('location:admin/');
					}
		}else{
			header('location:login.php');
			//echo "fail";
		}
}
?>