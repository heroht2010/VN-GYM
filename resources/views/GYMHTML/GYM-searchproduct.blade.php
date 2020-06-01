<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/searchproduct.css')}}">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../GYMJS/hinhhover.js"></script>
  <script type="text/javascript" src="../GYMJS/nav.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico"/>
<link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 2;
  background-color: black;
  min-width: 200px;
}

.dropdown-content a {
  color:white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: Montserrat;

}

.dropdown-content a:hover {background-color: #FFF056;color: black; -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;}

.dropdown:hover .dropdown-content {display: block;}
.use{
  color: #FFF056;
}

</style>
</head>
<body>
	<!-- <li class="nav-item dropdown">
   <a class="nav-link" href="#" id="navbarDropdown">Dropdown</a>
   <div class="dropdown-content">
   <a class="dropdown-item" href="#">Action</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#">Another action</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#">Something else here</a>
   </div>
</li> -->
  <div class="TPBS-login">
  	<div class="TPBS-login1">
  		<p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell" style="color: #FFF056"></span>Thông báo</p>
  		<p style="float: left;margin-right: 4%" class="hovertext"><span class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
  	</div>
  	<div class="TPBS-login2">
      <?php 
       if (session()->get('user')!='') {
        echo "<p style='float: left;margin-right: 4%;margin-left:4%'><span class='glyphicon glyphicon-phone-alt' style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>
        <div class='dropdown'>
        <a href='#' style='font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;' class='hovertext'>
         <span class='glyphicon glyphicon-user use'></span>".session()->get('user')."<i class='fa fa-caret-down'></i></a>
         <div class='dropdown-content'>
           <a href='#' style='text-decoration: none;'><span class='glyphicon glyphicon-user' style='margin-right: 3%'></span>Thông Tin Cá Nhân</a>
           <a href='".route('giohang')."' style='text-decoration: none;'><span class='glyphicon glyphicon-shopping-cart' style='margin-right: 3%'></span>Giỏ Hàng Của Tôi</a>
           <a href='#' style='text-decoration: none;'><span class='glyphicon glyphicon-heart' style='margin-right: 3%'></span>Sản Phẩm Yêu Thích</a>
            <a href='".route('payment')."' style='text-decoration: none;'><i class='fas fa-truck' style='margin-right: 3%'></i>Đơn Hàng Của Tôi</a>
           <a href='".route('dangxuat')."' style='text-decoration: none;'><span class='glyphicon glyphicon-log-out' style='margin-right: 3%'></span>Đăng Xuất</a>
         </div>
       </div>";
        
       }
       else{
         echo "<p style='float: left;margin-right: 4%'><span class='glyphicon glyphicon-phone-alt' style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>
      <a href='".route('dangnhap')."' style='text-decoration: none;'><p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-user' style='color: #FFF056'></span>Đăng nhập</p></a>
      <a href='".route('dangki')."'><p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-log-out' style='color: #FFF056'></span>Đăng ký</p></a>";
       }
       ?>
  		
  	</div>
  </div>
  <div class="TPBS-title">
  	<div class="TPBS-title-logo">
  		<a href="{{route('trangchu')}}" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
  	</div>
  	<div class="TPBS-title-search">
  		<form action="{{route('search')}}" method="GET">
      <input type="text" name="key" placeholder="Nhập sản phẩm cần tìm......" style="font-family: Montserrat;font-size: 16px">
      <button type="submit"><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
    </form>
  	</div>
  	<div class="TPBS-title-cart">
      <?php 
       if (session()->get('user')!='') {
        echo '<a href="'.route('giohang').'"><button><span class="glyphicon glyphicon-shopping-cart"></span><b style="font-family: Montserrat;margin-left: 3%;text-decoration: none;">Giỏ hàng</b></button></a>';
               }
       else{
         echo '<a href="'.route('dangnhap').'"><button><span class="glyphicon glyphicon-shopping-cart"></span><b style="font-family: Montserrat;margin-left: 3%;text-decoration: none;">Giỏ hàng</b></button></a>';

       }
       ?>
  		
  	</div>
  </div>

  <div class="SE-content">

    <div class="SE-filter">

      <div class="filter-detail">
        <p style="font-size: 18px;color: #FFF056"><span class="glyphicon glyphicon-filter" style="margin-right: 2%;"></span><b>BỘ LỌC TÌM KIẾM</b></p>
      </div>

      <div class="filter-detail" >
        <p style="font-size: 16px">Theo Danh Mục</p>
        <ul style="font-size: 15px">
        @foreach($loai as $value)
          <a href="{{route('search')}}?key=Tăng cơ giảm mỡ" class="hovertext" style="text-decoration: none;"><li>{{$value->product_type}}</li></a>
          
        @endforeach
        </ul>
      </div>
      <hr style="clear: both;border: 0.5px solid gray">

      <div class="filter-detail">
        <p style="font-size: 16px">Mức giá từ</p>
        <form>
          <input type="text" name="pricefirst" placeholder="VNĐ Từ"><span style="margin: 3%">-</span>
          <input type="text" name="pricelast" placeholder="VNĐ Đến">
          <button type="submit">Áp Dụng</button>
        </form>
      </div>

    </div>

    <div class="SE-list">
      <p class="titlesearch"><i class='far fa-lightbulb' style="color: #FFF056;margin-right: 1%"></i>Kết quả tìm kiếm cho từ khóa <b style="color: #FFF056">"<?php echo $_GET['key'] ?>"</b></p>
      <div class="list-detail">
          <?php 
           if ($data->count()==0) {
             echo "<center><p style='color: red;font-size: 20px'><b>Bạn đang nghĩ gì trong đầu vậy</b></p><img src='../upload/product/yaabot_robots_rights4-1366x683.jpg' style='height: 300px;width: 50%;'></center>";
           }
           else{
            foreach ($data as $key => $value) {
              echo "<div class='list-detail-content'>
          <img src='../upload/product/".$value['image']."' style='width: 100%;height: 200px;float: left;margin-bottom: 5%'>
          <p style='color: #FFF056;margin-bottom:1px'>".$value['name']." </p>
          <p>".$value['weight']."</p>
         
          <p style='color: #FFF056'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i></p>
          <p><b style='color: #FFF056'>".$value['price']."</b><strike style='font-size: 12px;margin-left: 3%'>".$value['onsale']."</strike></p>
        </div>";
            }
            
           }

           ?> 

      </div>

    </div>

  </div>
  @include("GYMHTML.footer")
</body>
</html>