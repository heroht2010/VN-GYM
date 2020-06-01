<!DOCTYPE html>
<html>
<head>
  <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/GYMCSS/admin.css')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://editor-latest.s3.amazonaws.com/v3/js/froala_editor.pkgd.min.js"></script>
  <link rel="stylesheet" href="https://editor-latest.s3.amazonaws.com/v3/css/froala_editor.pkgd.min.css">
  <script type="text/javascript" src="../GYMJS/hinhhover.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico"/>
<link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
<style>
  .class1 {
    text-decoration: underline;
  }

  .class2 {
    color: blue;
  }
</style>
</head>

<body>

   
   @include("GYMHTML.navbar_admin")

   <div class="frame">

     <div class="menu">
       @include("GYMHTML.menuadmin")
     </div>

      <div class="content">
       <p style="font-size: 25px;font-family: Montserrat;"><i class='fa fa-refresh' style="margin-right: 1%"></i><b>SỬA THÔNG TIN SẢN PHẨM</b></p>
        <?php foreach ($data as $key => $value): ?>
          
       <div class="menu-right1-input1">
         <div class="menu-right1-input1-name">
           <b style="font-family: Montserrat">Tên sản phẩm: </b><input type="text"  id="name" value="<?php echo $value->product()->get()->first()->name ?>">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Ngày tạo: </b><input type="text" id="loai" value="<?php echo $value->donhang()->get()->first()->ngaytao ?>">
         </div>
         <div class="menu-right1-input1-lop">
           <b style="font-family: Montserrat">Số lượng: </b><input type="text" id="soluong" value="<?php echo $value['soluong'] ?>">
         </div>
          <div class="menu-right1-input1-masv">
           <b style="font-family: Montserrat">Hương vị: </b><input type="text" id="huongvi"  value="<?php echo $value['huongvisp'] ?>">
         </div>
       </div>

        <div class="menu-right1-input2">
         <div class="menu-right1-input2-nganh">
           <b style="font-family: Montserrat">Trọng lượng: </b><input type="text" id="trongluong" value="<?php echo $value->product()->get()->first()->weight ?>">
         </div>
         <div class="menu-right1-input2-sdt">
           <b style="font-family: Montserrat">Đơn giá: </b><input type="text" id="dongia" value="<?php echo $value['dongia'] ?>">
         </div>
         <div class="menu-right1-input2-cmnd">
           <b style="font-family: Montserrat">Tổng tiền: </b><input type="text" id="sum" value="<?php echo $value['tongtien'] ?>">
         </div>
       </div>

       <div class="menu-right1-input2">
         <div class="menu-right1-input2-nganh">
           <b style="font-family: Montserrat">Đơn vị vận chuyển: </b><input type="text" id="vanchuyen" value="<?php echo $value['vanchuyen'] ?>">
         </div>
         <div class="menu-right1-input2-sdt">
           <b style="font-family: Montserrat">Trạng thái: </b><input type="text" id="trangthai" value="<?php if ($value['trangthai']=='cho') {
            echo "ĐANG XÁC NHẬN";
          }
          else{
            if ($value['trangthai']=='dang') {
              echo "ĐANG GIAO";
            }
            else{
              if ($value['trangthai']=='da') {
                echo "ĐÃ GIAO";
              }
              else{
                echo "ĐÃ HỦY";
              }
            }
          } ?>">
         </div>
         <div class="menu-right1-input2-cmnd">
           <b style="font-family: Montserrat">Ngày nhận: </b>
           <input type="text" name="ngaynhan" id="ngaynhan" value="<?php echo $value->donhang()->get()->first()->ngaynhan ?>">
         </div>
       </div>

         <div class="menu-right1-input3">
         <center><button name="sub" class="btn btn-success" onclick="valid()">UPDATE</button>
          <p id="loi" style="color: red"></p>
         </center>
        </div>
        <script type="text/javascript">

          function valid() {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
    });
            if ($("#name").val()==''||$("#loai").val()==''||$("#soluong").val()==''||$("#huongvi").val()==''||$("#trongluong").val()==''||$("#dongia").val()==''||$("#sum").val()==''||$("#vanchuyen").val()==''||$("#trangthai").val()=='') {
                 document.getElementById("loi").innerHTML="Vui lòng nhập đầy đủ thông tin";
            }
            else{
             
              $.ajax({
                url: "{{route('updatepay')}}",
                type: "POST",
                data: {
                  id: {{$value->donhang()->get()->first()->id}},
                  trangthai: $("#trangthai").val(),
                  ngaynhan: $("#ngaynhan").val()
                },
              })
              .done(function() {
                console.log("success");
              })
              .fail(function() {
                console.log("error");
              })
              .always(function(response) {
                if (response.status=='1') {
                  alert("UPDATE Thành Công");
                  window.location="{{route('listpay')}}";
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