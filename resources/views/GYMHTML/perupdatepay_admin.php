<?php 
$id=isset($_POST['id'])?$_POST['id']:'';
$trangthai=isset($_POST['trangthai'])?$_POST['trangthai']:'';
$ca;
if ($trangthai=='ĐANG XÁC NHẬN') {
	$ca='cho';
}
else{
	if ($trangthai=='ĐANG GIAO') {
		$ca='dang';
	}
	else{
		if ($trangthai=='ĐÃ GIAO') {
			$ca='da';
		}
		else{
			$ca='huy';
		}
	}
}
$conn=mysqli_connect('localhost','root','','gym');
mysqli_set_charset($conn,'UTF8');
$sql="UPDATE donhang SET trangthai='$ca' WHERE id=$id";
if (mysqli_query($conn,$sql)) {
	echo "thanhcong";
}
else{
	echo "string";
}

 ?>