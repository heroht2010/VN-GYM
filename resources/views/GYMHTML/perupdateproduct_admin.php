<?php 
$id=isset($_POST['id'])?$_POST['id']:'';
$name=isset($_POST['name'])?$_POST['name']:'';
$weight=isset($_POST['weight'])?$_POST['weight']:'';
$count=isset($_POST['count'])?$_POST['count']:'';
$loai=isset($_POST['loai'])?$_POST['loai']:'';
$onsale=isset($_POST['onsale'])?$_POST['onsale']:'';
$price=isset($_POST['price'])?$_POST['price']:'';
$image=isset($_POST['image'])?$_POST['image']:'';
$detail=isset($_POST['detail'])?$_POST['detail']:'';
$thuonghieu=isset($_POST['thuonghieu'])?$_POST['thuonghieu']:'';
$mota=isset($_POST['mota'])?$_POST['mota']:'';
$conn=mysqli_connect('localhost','root','','gym');
mysqli_set_charset($conn,'UTF8');
$sql="UPDATE product INNER JOIN loaisanpham SET product.id_product_type=loaisanpham.id,product.name='$name',product.weight='$weight',product.detail='$detail',product.onsale='$onsale',product.price='$price',product.count=$count,product.mota='$mota',product.thuonghieu='$thuonghieu' WHERE loaisanpham.product_type='$loai' AND product.id=$id";
if (mysqli_query($conn,$sql)) {
	echo "thanhcong";
}
else{
	echo "string";
}

 ?>