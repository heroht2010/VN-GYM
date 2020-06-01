
<!DOCTYPE html>
<html>
<head>
  <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/admin.css')}}">
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
       <p style="font-family: Montserrat;" class="titlename"><i class='fa fa-refresh' style="margin-right: 1%"></i><b>SỬA THÔNG TIN SẢN PHẨM</b></p>
        <?php foreach ($data as $key => $value): ?>
          <form action="{{route('updateproduct')}}?id={{$id}}" method="POST" enctype="multipart/form-data">
          @csrf
       <div class="menu-right1-input1">
         <div  class="menu-right1-input1-name">
           <b style="font-family: Montserrat">Tên sản phẩm: </b><input type="text" name="ten"  id="name" value="<?php echo $value['name'] ?>">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Loại: </b>
           <select name="loai">
               <?php
               $i=0;
               foreach($type as $key => $value1){
                   $i+=1;
               if(($value1->id)==($value->id_product_type)){
               echo "<option>$i-$value1->product_type</option>";
               }
               else{
                   echo "<option>$i-$value1->product_type</option>";
               }
            }
               ?>
           </select>
         </div>
          <div class="menu-right1-input1-masv">
           <b style="font-family: Montserrat">Số lượng: </b><input type="text" id="count" name="soluong" value="<?php echo $value['count'] ?>">
         </div>
         
         <div class="menu-right1-input1-lop">
           <b style="font-family: Montserrat">Trọng lượng: </b><input type="text" name="trongluong" id="weight" value="<?php echo $value['weight'] ?>">
         </div>
       </div>

        <div class="menu-right1-input2">
         <div class="menu-right1-input2-nganh">
           <b style="font-family: Montserrat;float: left;margin-right: 2%;">Image: </b>
           <img src="../upload/product/{{$value->image}}" style="height: 100px;width: 100px;float: left;">
           <input type="file" id="image" style="width: 90%;" name="hinh">
         </div>
         <div class="menu-right1-input2-sdt">
           <b style="font-family: Montserrat">Giá gốc: </b><input type="text" name="onsale" id="onsale" value="<?php echo $value['onsale'] ?>">
         </div>
         <div class="menu-right1-input2-cmnd">
           <b style="font-family: Montserrat">Giá khuyến mãi: </b><input type="text" name="price" id="price" value="<?php echo $value['price'] ?>">
         </div>
       </div>

              <div class="menu-right1-input3">
                <div class="menu-right1-input3-mota">
           <b style="font-family: Montserrat">Thương hiệu: </b><input type="text" name="thuonghieu" name="thuonghieu" placeholder="Thương hiệu" id="thuonghieu" value="<?php echo $value['thuonghieu'] ?>">
         </div>

                <div class="menu-right1-input3-overview">
           <b style="font-family: Montserrat">Tổng quan: </b><br><textarea type="text" name="detail" id="detail" data-validate="Nhập địa chỉ" placeholder="Mô tả tổng quan sản phẩm"><?php echo $value['detail'] ?></textarea>
         
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