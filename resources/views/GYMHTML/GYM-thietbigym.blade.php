<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/thietbigym.css')}}">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
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
<style type="text/css">
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
  .dropdown-submenu {
  position: relative;
  background-color: #FFF056!important;
  font-family: Montserrat;
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
 
  background-color: #FFF056!important;
}

.dropdown-submenu:hover>.dropdown-menu {
  display: block;
  background-color: #FFF056!important;
}

.dropdown-submenu>a:after {
 
  background-color: #FFF056!important;
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
  background-color: #FFF056!important;
}

.dropdown-submenu.pull-left {
 
  background-color: #FFF056!important;
}

.dropdown-submenu.pull-left>.dropdown-menu {

  background-color: #FFF056!important;
}
.dropdown-submenu:hover{
  background-color: #FFF056!important;
}
.dropdown-menu>li>a:hover{
  background-color: #FFF056!important;
  filter: brightness(98%);
  color: red!important;
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
         if (session()->get('user')=='') {
          echo "<p style='float: left;margin-right: 4%;'><span class='glyphicon glyphicon-phone-alt' style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>";
           echo "<a href='login' style='text-decoration: none;'><p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-user' style='color: #FFF056'></span>Đăng nhập</p></a>";
      echo "<a href='".route('dangki')."'><p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-log-out' style='color: #FFF056'></span>Đăng ký</p></a>";
         }
         else{
          echo "<p style='float: left;margin-right: 4%;margin-left: 10%'><span class='glyphicon glyphicon-phone-alt' style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>";
          echo '<li class="dropdown">
 <a href="#" style="font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;" class="hovertext">
  <span class="glyphicon glyphicon-user use"></span>'.session()->get("user").'<i class="fa fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-user" style="margin-right: 3%"></span>Thông Tin Cá Nhân</a>
    <a href="'.route('giohang').'" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 3%"></span>Giỏ Hàng Của Tôi</a>
    <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-heart" style="margin-right: 3%"></span>Sản Phẩm Yêu Thích</a>
    <a href="'.route('payment').'" style="text-decoration: none;"><i class="fas fa-truck" style="margin-right: 3%"></i>Đơn Hàng Của Tôi</a>
    <a href="'.route('dangxuat').'" style="text-decoration: none;"><span class="glyphicon glyphicon-log-out" style="margin-right: 3%"></span>Đăng Xuất</a>
  </div>
</li>';
         }
       ?>
  		
  	</div>
  </div>
  <div class="TPBS-title">
  	<div class="TPBS-title-logo">
  		<a href="{{route('trangchu')}}" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
  	</div>
  	<div class="TPBS-title-search">
      <form action="{{route('search')}}">
  		<input type="text" name="key" placeholder="Nhập sản phẩm cần tìm......" style="font-family: Montserrat;font-size: 16px">
      <button type="submit"><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
      </form>
  	</div>
  	<div class="TPBS-title-cart">
    <?php 
    if(session()->get('user')!=''){
      echo "<a href='".route('giohang')."'><button><span class='glyphicon glyphicon-shopping-cart'></span><b style='font-family: Montserrat;margin-left: 3%;text-decoration: none;'>Giỏ hàng</b></button></a>";
    }
    else{
      echo "<a href='".route('dangnhap')."'><button><span class='glyphicon glyphicon-shopping-cart'></span><b style='font-family: Montserrat;margin-left: 3%;text-decoration: none;'>Giỏ hàng</b></button></a>";
    }
    ?>
  		
  	</div>
  </div>

  <div class="ACCE-content">
      
    <div class="ACCE-left">
      <div class="ACCE-menu-list">
      @foreach($loai as $item)
        <div class="ACCE-menu-list1">
        <img src="{{$item->img}}">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;color: white"><b>{{$item->loai}}</b></p>
    </div>
  		@endforeach
 
  	</div>
    </div>
    <div class="ACCE-right">
        <div class="ACCE-right-img">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.thol.com.vn/pub/media/catalog/category/thietBiPhongGymer_1.jpg" alt="Los Angeles" width="100%" height="330px">
                  </div>
                  <div class="carousel-item">
                    <img src="https://digipublic.com/wp-content/uploads/2018/04/dich-vu-marketing-online-tron-goi-cho-doanh-nghiep-cung-cap-thiet-bi-tap-gym-1-1024x455.jpg" alt="Los Angeles" width="100%" height="330px">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.cfyc.com.vn/upload/Lifestyle%20website%20article/News/Khai-truong-sieu-CLB-tai-Nha-Trang-CLB-thu-24/California-Nha-Trang-Grand-Opening-15.jpg" alt="Los Angeles" width="100%" height="330px">
                  </div>
                </div>
                
                <a class="carousel-control-prev" href="#demo" data-slide="prev" style="width: 40px;height: 100px;background-color: black;margin-top: 12%">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next" style="width: 40px;height: 100px;background-color: black;margin-top: 12%">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>

        <div class="ACCE-right-product">
              <p style="color: #FFF056;font-family: Montserrat;font-size: 30px">THIẾT BỊ PHÒNG GYM</p>
                <div class="ACCE-product-list">
                    @foreach($thietbi as $item)
                    <div class="ACCE-product-detail">
                        <img src="upload/acce/{{$item->img}}" style="width: 100%;height: 250px;float: left;margin-bottom: 8px" class="image">
                        <div class="ACCE-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
                        <center><p style="color: white;font-family: Montserrat;font-size: 15px;margin-bottom: 2px">{{$item->ten}}</p>
                        <p style="color: white;font-family: Montserrat;font-size: 20px">{{$item->gia}}</p></center>
                    </div>
                    @endforeach
                
                </div>
              <center>{{$thietbi->links()}}</center>
        </div>

    </div>

  </div>
  @include('GYMHTML.footer')
</body>
</html>