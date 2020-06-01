<!DOCTYPE html>
<html>
<head>
  <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/GYMCSS/insertadmin.css')}}">
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
       <p style="font-size: 25px;font-family: Montserrat;"><i class=' fa fa-user-plus' style="margin-right: 1%"></i><b>THÊM HUẤN LUYỆN VIÊN</b></p>
       <form action="{{route('insertpt')}}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="menu-right1-input1">
         <div class="menu-right1-input1-name">
           <b style="font-family: Montserrat">Nickname: </b><input type="text" name="ten" id="ten" placeholder="Nickname">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Ngày Sinh: </b><input type="date" name="ngaysinh" id="ngaysinh" placeholder="Ngày Sinh: 1998-02-20">
         </div>
         <div class="menu-right1-input1-sdt">

           <b style="font-family: Montserrat">SĐT: </b>
           <input type="text" name="sdt" id="sdt" placeholder="Số điện thoại">
         </div>
          <div class="menu-right1-input1-cmnd">
           <b style="font-family: Montserrat">CMND: </b><input type="text" name="cmnd" id="cmnd" placeholder="Chứng minh nhân dân">
         </div>
       </div>

        <div class="menu-right1-input2">
         <div class="menu-right1-input2-image">
           <b style="font-family: Montserrat">Image: </b>
           
           <input type="file" name="hinh" id="image">
         </div>
         <div class="menu-right1-input2-tk">
           <b style="font-family: Montserrat">Tài khoản: </b><input type="text" name="taikhoan" id="taikhoan" placeholder="Tài khoản">
         </div>
         <div class="menu-right1-input2-mk">
           <b style="font-family: Montserrat">Mật khẩu: </b><input type="text" id="matkhau" name="matkhau" placeholder="Mật khẩu">
         </div>
         <div class="menu-right1-input2-id">
           <b style="font-family: Montserrat">ID_PT: </b><input type="text" id="idpt" name="idpt" placeholder="ID: 1 or 2">
         </div>
       </div>

              <div class="menu-right1-input3">
         <div class="menu-right1-input3-diachi">
           <b style="font-family: Montserrat">Địa Chỉ: </b><input type="text" id="diachi" name="diachi" placeholder="Địa Chỉ" data-validate="Nhập địa chỉ">
         </div>
         <div class="menu-right1-input3-quequan">
           <b style="font-family: Montserrat">Quê Quán: </b><input type="text" id="quequan" name="quequan" placeholder="Quê Quán">
         </div>
      </div>

        <div class="menu-right1-input3">
         <div class="menu-right1-input3-follow">
           <b style="font-family: Montserrat">Follow: </b><input type="text" id="follow" name="follow" placeholder="Lượng follow">
         </div>
         <div class="menu-right1-input3-detail">
           <b style="font-family: Montserrat">Sơ lược: </b><textarea type="text" id="detail" name="detail" placeholder="Sơ lược về quá trình khổ luyện"></textarea>
         </div>
       </div>

         <div class="menu-right1-input3" style="margin-top: 2%">
         <center><button name="sub" class="btn btn-success" type="submit">INSERT</button>
          <p id="loi" style="color: red"></p>
         </center>
        </div>
       </form>
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