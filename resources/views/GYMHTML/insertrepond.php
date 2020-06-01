<?php 
$name=isset($_POST['name'])?$_POST['name']:'';
$tinh=isset($_POST['tinh'])?$_POST['tinh']:'';
$email=isset($_POST['email'])?$_POST['email']:'';
$sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
$respond=isset($_POST['gopy'])?$_POST['gopy']:'';
$conn=mysqli_connect('localhost','root','','gym');
 mysqli_set_charset($conn,'UTF8');
$sql="INSERT INTO response(name,province,email,sdt,respond) VALUES ('$name','$tinh','$email','$sdt','$respond')";
if(mysqli_query($conn,$sql)){
	header("Location:../GYMHTML/GYM-trangchu.php");
}

 ?>