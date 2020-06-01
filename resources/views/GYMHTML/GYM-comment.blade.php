<!DOCTYPE html>
<html>
<head>
	<title>VNGYM - The World Of Gymer</title>
	 	<link rel="stylesheet" type="text/css" href="{{asset('/GYMCSS/admin.css')}}">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

      <div class="content">
       <p style="font-size: 25px;font-family: Montserrat;"><i class='fas fa-truck' style="margin-right: 1%"></i><b>TÂM TÌNH KHÁCH HÀNG</b></p>
       <p>
       </p>
       <table class="table table-bordered" style="background-color: white">
    <thead>
      <tr>
        <th>ID</th>
        <th>Người dùng</th>
        <th>Image</th>
        <th>Tên sản phẩm</th>
        <th>Trọng lượng</th>
        <th>Comment</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0; ?>
      
      <?php foreach ($data as $key => $value): ?>
        
      <tr>
        <td><?php echo $i=$i+1; ?></td>
        <td><?php echo $value->customer()->get()->first()->ten;echo " "; echo $value->customer()->get()->first()->ho?></td>
        <td ><img src="../upload/product/<?php echo $value->product()->get()->first()->image ?>" style="height: 100px;width: 100px"></td>
        <td><?php echo $value->product()->get()->first()->name ?></td>
        <td><?php echo $value->product()->get()->first()->weight ?></td>
        <td><?php echo $value->comment ?></td>
        
      </tr>
      
      <?php endforeach ?>
      <center>{{$data->links()}}</center>
    </tbody>
  </table>
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