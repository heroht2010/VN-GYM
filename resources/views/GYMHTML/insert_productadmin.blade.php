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
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
     <script type="text/javascript" src="jquery.cleditor.min.js"></script>
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

  
    <div class="navtop">
          <div class="navtopleft"></div>
          <div class="navtopright">
            <div class="dropdown">
 <a href="../HTML/chuacokinhnghiem.html" style="font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;color: white" class="hovertext">
  <img src="https://tintuc.viettelstore.vn/wp-content/uploads/2018/10/che-do-an-danh-chrome-1.png" style="height: 50px;border-radius: 50%;width: 30%;margin-right: 3px;float: left;"><b style="float: left;padding-top: 5%;">Admin</b><i class="fa fa-caret-down" style="float: left;padding-top: 5%"></i></a>
  <div class="dropdown-content" style="margin-top: 26%;">
    <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-user" style="margin-right: 3%"></span>Nhật Ký</a>
    <a href="../GYMHTML/GYM-giohang.php" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 3%"></span>Góc Riêng</a>
    <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-heart" style="margin-right: 3%"></span>Cất Giữ Tình Yêu</a>
    <a href="{{route('dangxuat')}}" style="text-decoration: none;"><span class="glyphicon glyphicon-log-out" style="margin-right: 3%"></span>Đăng Xuất</a>
  </div>
</div>
          </div>
        </div>

   <div class="frame">

     <div class="menu">
       
       <div class="sidenav">
    <a href="{{route('trangchu')}}" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
    <a  class="active" style="font-family: Montserrat;color: white;text-decoration: none;"><p><span class="glyphicon glyphicon-user" style="margin-right: 2%;color: #FFF056;font-size: 20px"></span><b style="font-size: 20px;">Xin Chào, Admin</b></p></a>
    <a href="{{route('admin')}}" class="hovermenu" style="
   text-decoration: none;"><i class="fa fa-dashboard" style="margin-right: 3%"></i>Dashboard</a>
    <button class="dropdown-btn hovermenu"><i class='fas fa-box-open' style="margin-right: 2%"></i>Sản phẩm
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="{{route('list-productadmin')}}" class="hovermenu" style="text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%;"></i>Danh sách</a>
      <a href="{{route('viewinsertproduct')}}" class="hovermenu" style="text-decoration: none;"><i class='fas fa-cart-plus' style="margin-right: 3%;"></i>Thêm</a>
    </div>
    <button class="dropdown-btn hovermenu"><i class='fas fa-users-cog' style="margin-right: 2%"></i>Quản lý người dùng
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="#" class="hovermenu" style="text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%;"></i>Danh sách</a>
      <a href="#" class="hovermenu" style="text-decoration: none;"><i class=' fas fa-user-plus' style="margin-right: 3%;"></i>Thêm</a>
    </div>
    <button class="dropdown-btn hovermenu"><i class=' fa fa-id-card' style="margin-right: 2%"></i>Huấn luyện viên
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="{{route('listpt')}}" class="hovermenu" style="text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%;"></i>Danh sách</a>
      <a href="{{route('viewinsertpt')}}" class="hovermenu" style="text-decoration: none;"><i class='fas fa-user-plus' style="margin-right: 3%;"></i>Thêm</a>
    </div>
    <button class="dropdown-btn hovermenu"><i class=' fa fa-id-card' style="margin-right: 2%"></i>Các bài tập
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="#" class="hovermenu" style="text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%;"></i>Danh sách</a>
      <a href="#" class="hovermenu" style="text-decoration: none;"><i class=' fas fa-user-plus' style="margin-right: 3%;"></i>Thêm</a>
    </div>
     <a href="{{route('listcomment')}}" class="hovermenu" style="
   text-decoration: none;"><i class=" fas fa-assistive-listening-systems" style="margin-right: 3%"></i>Các phản hồi</a>
   <a href="{{route('listpay')}}" class="hovermenu" style="
   text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%"></i>Danh sách đơn hàng</a>
   <a href="{{route('doanhthu')}}" class="hovermenu" style="
   text-decoration: none;"><i class=' fas fa-money-bill-wave' style="margin-right: 3%"></i>Doanh thu</a>
      </div>
     </div>

      <div class="content">
        <form action="{{route('insertproduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
       <p style="font-size: 25px;font-family: Montserrat;"><i class='fas fa-cart-plus' style="margin-right: 1%"></i><b>THÊM SẢN PHẨM</b></p>
       <div class="menu-right1-input1">
         <div class="menu-right1-input1-name">
           <b style="font-family: Montserrat">Tên sản phẩm: </b><input type="text" name="ten" id="name" placeholder="Tên sản phẩm">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Loại: </b><select type="text" name="loai" id="loai">
               <?php $i=0;?>
            <?php foreach ($data as $key => $value): ?>
             <option><?php $i++; echo "$i-".$value['product_type'].""; ?></option>
            <?php endforeach ?>
          </select>
         </div>
         <div class="menu-right1-input1-lop">
           <b style="font-family: Montserrat">Trọng lượng: </b><input type="text" name="trongluong" id="weight" placeholder="Trọng lượng sản phẩm">
         </div>
          <div class="menu-right1-input1-masv">
           <b style="font-family: Montserrat">Số lượng: </b><input type="text" name="soluong" id="count" placeholder="Số lượng sản phẩm">
         </div>
       </div>

        <div class="menu-right1-input1">
         <div class="menu-right1-input1-name" >
           <b style="font-family: Montserrat">Image: </b><input type="file" name="hinh" id="image" style="padding: 1%;" placeholder="Link hình sản phẩm">
         </div>
         <div class="menu-right1-input1-born">
           <b style="font-family: Montserrat">Giá gốc: </b><input type="text" name="price" id="onsale" placeholder="Giá gốc">
         </div>
         <div class="menu-right1-input1-lop">
           <b style="font-family: Montserrat">Giá khuyến mãi: </b><input type="text" name="onsale" id="price" placeholder="Giá khuyến mãi">
         </div>
         <div class="menu-right1-input1-masv">
           <b style="font-family: Montserrat">ID_product: </b>
           <select id="id" name="id">
               <option>1</option><option>2</option><option>3</option>
           </select>
         </div>
       </div>

              <div class="menu-right1-input3">
                <div class="menu-right1-input3-mota">
           <b style="font-family: Montserrat">Thương hiệu: </b><input type="text" name="thuonghieu" placeholder="Thương hiệu" id="thuonghieu">
         </div>

                <div class="menu-right1-input3-overview">
           <b style="font-family: Montserrat">Tổng quan: </b><br><textarea type="text" name="detail" id="detail" data-validate="Nhập địa chỉ" placeholder="Mô tả tổng quan sản phẩm"></textarea>
         
         </div>

      </div>
      
      <div class="menu-right1-input3">
        <textarea id="summernote" class="dinhdang" name="mota"></textarea>

      </div>
         <div class="menu-right1-input3">
         <center><button name="sub" class="btn btn-success" type="submit">INSERT</button>
          <p id="loi" style="color: red"></p>
         </center>
        </div>
        </form>
        <script type="text/javascript">
 
         $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: 'Mô tả chi tiết sản phẩm',
        tabsize: 2,
        height: 200,
      });
    });
        </script>
        
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