<?php 
require "../GYMHTML/gym-select.php";
$ma=isset($_GET['id'])?$_GET['id']:'';
$data=get_dbcon("customer","key1=$ma");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="../GYMCSS/updatept_admin.css">
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

   
   <?php include("../GYMHTML/navbar_admin.php"); ?>

   <div class="frame">

     <div class="menu">
       <?php include("../GYMHTML/menuadmin.php"); ?>
     </div>

      <div class="content">
       <p style="font-size: 25px;font-family: Montserrat;"><i class='fa fa-refresh' style="margin-right: 1%"></i><b>SỬA THÔNG TIN PT</b></p>
        <?php foreach ($data as $key => $value): ?>
          
       <div class="menu-right1-input1">
         <div class="menu-right1-input1-name">
           <b style="font-family: Montserrat">Tên: </b><input type="text"  id="ten" value="<?php echo $value['name'] ?>">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Ngày sinh: </b>
           <input type="text" id="ngaysinh" value="<?php echo $value['ngaysinh'] ?>">
         </div>
         <div class="menu-right1-input1-lop">
           <b style="font-family: Montserrat">SĐT: </b><input type="text" id="sdt" value="<?php echo $value['sdt'] ?>">
         </div>
          <div class="menu-right1-input1-masv">
           <b style="font-family: Montserrat">CMND: </b><input type="text" id="cmnd"  value="<?php echo $value['cmnd'] ?>">
         </div>
       </div>

        <div class="menu-right1-input2">
         <div class="menu-right1-input2-nganh">
           <b style="font-family: Montserrat">Image: </b><input type="text" id="image" value="<?php echo $value['image'] ?>">
         </div>
         <div class="menu-right1-input2-sdt">
           <b style="font-family: Montserrat">Tài khoản: </b><input type="text" id="taikhoan" value="<?php echo $value['taikhoan'] ?>">
         </div>
         <div class="menu-right1-input2-cmnd">
           <b style="font-family: Montserrat">Mật khẩu: </b><input type="text" id="matkhau" value="<?php echo $value['matkhau'] ?>">
         </div>
         <div class="menu-right1-input2-idpt">
           <b style="font-family: Montserrat">ID_PT: </b><input type="text" id="idpt" value="<?php echo $value['id'] ?>">
         </div>
       </div>

       <div class="menu-right1-input2">
         <div class="menu-right1-input2-diachi">
           <b style="font-family: Montserrat">Địa chỉ: </b><input type="text" id="diachi" value="<?php echo $value['diachi'] ?>">
         </div>
         <div class="menu-right1-input2-quequan">
           <b style="font-family: Montserrat">Quê quán: </b><input type="text" id="quequan" value="<?php echo $value['quequan'] ?>">
         </div>
       </div>

              <div class="menu-right1-input3">

                <div class="menu-right1-input3-follow">
           <b style="font-family: Montserrat">Lượng Follow: </b><input type="text" id="follow" value="<?php echo $value['follow'] ?>">
         </div>

         <div class="menu-right1-input3-detail">
           <b style="font-family: Montserrat">Quá trình khổ luyện: </b><br><textarea type="text" id="detail" value="<?php echo $value['detail'] ?>" data-validate="Nhập địa chỉ"><?php echo $value['detail'] ?></textarea>
         </div>
           
         
         
      </div>

         <div class="menu-right1-input3">
         <center><button name="sub" class="btn btn-success" onclick="valid()">UPDATE</button>
          <p id="loi" style="color: red"></p>
         </center>
        </div>
        <script type="text/javascript">

          function valid() {
            if ($("#ten").val()==''||$("#sdt").val()==''||$("#cmnd").val()==''||$("#ngaysinh").val()==''||$("#image").val()==''||$("#taikhoan").val()==''||$("#matkhau").val()==''||$("#idpt").val()==''||$("#diachi").val()==''||$("#quequan").val()==''||$("#follow").val()==''||$("#detail").val()=='') {
                 document.getElementById("loi").innerHTML="Vui lòng nhập đầy đủ thông tin";
            }
            else{
              $.ajax({
                url: '../GYMHTML/perupdatept_admin.php',
                type: 'POST',
                data: {
                  id: <?php echo $ma; ?>,
                  ten: $("#ten").val(),
                  ngaysinh: $("#ngaysinh").val(),
                  sdt: $("#sdt").val(),
                  cmnd: $("#cmnd").val(),
                  image: $("#image").val(),
                  taikhoan: $("#taikhoan").val(),
                  matkhau: $("#matkhau").val(),
                  idpt: $("#idpt").val(),
                  diachi: $("#diachi").val(),
                  quequan: $("#quequan").val(),
                  follow: $("#follow").val(),
                  detail: $("#detail").val()
                  
                },
              })
              .done(function() {
                console.log("success");
              })
              .fail(function() {
                console.log("error");
              })
              .always(function(response) {
                if (response=='thanhcong') {
                  alert("UPDATE Thành Công");
                  window.location="../GYMHTML/list-ptadmin.php";
                }
                else{
                  document.getElementById("loi").innerHTML="Có lỗi xảy ra";
                }
              });
              
            }
          }
         
        </script>
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