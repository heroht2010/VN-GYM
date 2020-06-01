<!DOCTYPE html>
<html>
<head>
  <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/GYMCSS/updatept_admin.css')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
       <p style="font-size: 25px;font-family: Montserrat;"><i class='fa fa-refresh' style="margin-right: 1%"></i><b>SỬA THÔNG TIN PT</b></p>
      
       <?php foreach ($data as $key => $value): ?>
        
        <form action="{{route('updatept')}}?id={{$value->id}}" method="POST" enctype="multipart/form-data"> 
            @csrf
       <div class="menu-right1-input1">
         <div class="menu-right1-input1-name">
           <b style="font-family: Montserrat">Tên: </b><input type="text" name="ten" id="ten" value="<?php echo $value['name'] ?>">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Ngày sinh: </b>
           <input type="text" id="ngaysinh" value="<?php echo $value['ngaysinh'] ?>" name="ngaysinh">
         </div>
         <div class="menu-right1-input1-lop">
           <b style="font-family: Montserrat">SĐT: </b><input type="text" id="sdt" name="sdt" value="<?php echo $value['sdt'] ?>">
         </div>
          <div class="menu-right1-input1-masv">
           <b style="font-family: Montserrat">CMND: </b><input type="text" id="cmnd" name="cmnd" value="<?php echo $value['cmnd'] ?>">
         </div>
       </div>

        <div class="menu-right1-input2">
         <div class="menu-right1-input2-nganh">
           <b style="font-family: Montserrat">Image: </b>
           <img src="../upload/pt/{{$value->image}}" style="height: 100px;width: 100px;">
           <input type="file" name="hinh" id="image">
         </div>
         <div class="menu-right1-input2-sdt">
           <b style="font-family: Montserrat">Tài khoản: </b><input type="text" id="taikhoan" name="taikhoan" value="<?php echo $value['taikhoan'] ?>" disabled>
         </div>
         <div class="menu-right1-input2-cmnd">
           <b style="font-family: Montserrat">Mật khẩu: </b><input type="text" id="matkhau" name="matkhau" value="<?php echo $value['matkhau'] ?>" disabled>
         </div>
         <div class="menu-right1-input2-idpt">
           <b style="font-family: Montserrat">ID_PT: </b><input type="text" id="idpt" name="idpt" value="<?php echo $value['id_pt'] ?>">
         </div>
       </div>

       <div class="menu-right1-input2">
         <div class="menu-right1-input2-diachi">
           <b style="font-family: Montserrat">Địa chỉ: </b><input type="text" id="diachi" name="diachi" value="<?php echo $value['diachi'] ?>">
         </div>
         <div class="menu-right1-input2-quequan">
           <b style="font-family: Montserrat">Quê quán: </b><input type="text" id="quequan" name="quequan" value="<?php echo $value['quequan'] ?>">
         </div>
       </div>

              <div class="menu-right1-input3">

                <div class="menu-right1-input3-follow">
           <b style="font-family: Montserrat">Lượng Follow: </b><input type="text" id="follow" name="follow" value="<?php echo $value['follow'] ?>">
         </div>

         <div class="menu-right1-input3-detail">
           <b style="font-family: Montserrat">Quá trình khổ luyện: </b><br><textarea type="text" name="detail" id="detail" value="<?php echo $value['detail'] ?>" data-validate="Nhập địa chỉ"><?php echo $value['detail'] ?></textarea>
         </div>
           
         
         
      </div>

         <div class="menu-right1-input3">
         <center><button name="sub" class="btn btn-success" type="submit">UPDATE</button>
          <p id="loi" style="color: red"></p>
         </center>
        </div>
        </form>
      <?php endforeach ?>
       
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