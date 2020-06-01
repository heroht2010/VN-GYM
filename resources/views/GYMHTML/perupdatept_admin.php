<?php 
$id=isset($_POST['id'])?$_POST['id']:'';
$ten=isset($_POST['ten'])?$_POST['ten']:'';
$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:'';
$sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
$cmnd=isset($_POST['cmnd'])?$_POST['cmnd']:'';
$image=isset($_POST['image'])?$_POST['image']:'';
$taikhoan=isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
$matkhau=isset($_POST['matkhau'])?$_POST['matkhau']:'';
$idpt=isset($_POST['idpt'])?$_POST['idpt']:'';
$diachi=isset($_POST['diachi'])?$_POST['diachi']:'';
$quequan=isset($_POST['quequan'])?$_POST['quequan']:'';
$follow=isset($_POST['follow'])?$_POST['follow']:'';
$detail=isset($_POST['detail'])?$_POST['detail']:'';

$conn=mysqli_connect('localhost','root','','gym');
mysqli_set_charset($conn,'UTF8');
$sql="UPDATE customer SET id=$idpt,image='$image',follow='$follow',name='$ten',ngaysinh='$ngaysinh',diachi='$diachi',quequan='$quequan',cmnd='$cmnd',sdt='$sdt',taikhoan='$taikhoan',matkhau='$matkhau',detail='$detail' WHERE key1=$id";
if (mysqli_query($conn,$sql)) {
	echo "thanhcong";
}
else{
	echo "string";
}
// echo "$id-$ten-$ngaysinh-$sdt-$cmnd-$image-$taikhoan-$matkhau-$idpt-$diachi
// -$quequan-$follow-$detail";
 ?>