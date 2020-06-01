<!DOCTYPE html>
<html>
<head>
	<title>VNGYM - The World Of Gymer</title>
	 	<link rel="stylesheet" type="text/css" href="{{asset('/GYMCSS/admin.css')}}">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../GYMJS/hinhhover.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico"/>
<link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
</head>

<body>

   
    @include("GYMHTML.navbar_admin")

   <div class="frame">

     <div class="menu">
     @include("GYMHTML.menuadmin")
     </div>

      <div class="content" >
       <p style="font-size: 25px;font-family: Montserrat;"><i class='fas fa-clipboard-list' style="margin-right: 1%"></i><b>DANH SÁCH SẢN PHẨM</b></p>
       <table class="table table-bordered table-scroll small-first-col" style="background-color: white" >
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Tên</th>
        <th>Loại</th>
        <th>Trọng lượng</th>
        <th>Tổng quan</th>
        <th>Giá gốc</th>
        <th>Giá khuyến mãi</th>
        <th>Số lượng</th>
      </tr>
    </thead>
    <tbody class="body-half-screen">
      <?php $i=0; ?>
      <?php foreach ($data as $key => $value): ?>
         
      <tr>
        <td><?php echo $i=$i+1; ?></td>
        <td ><img src="../upload/product/<?php echo $value['image'] ?>" style="height: 100px;width: 100px"></td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value->loai()->get()->first()->product_type ?></td>
        <td><?php echo $value['weight'] ?></td>
        <td><?php echo $value['detail'] ?></td>
        <td><?php echo $value['onsale'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['count'] ?></td>
        <td style="color: green"><i class="fa fa-refresh"></i><a href="{{route('editproduct')}}?id=<?php echo $value['id'] ?>">Sửa</a></td>
        <td style="color: red"><i class="glyphicon glyphicon-trash"></i><a href="{{route('deleteproduct')}}?id=<?php echo $value['id'] ?>">Xóa</a></td>
      </tr>
      
      <?php endforeach ?>
    </tbody>
  </table>
  <center>
        {{$data->links()}}
  </center>
      </div>
   </div>

</body>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</html>