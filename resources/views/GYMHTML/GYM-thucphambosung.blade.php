<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/gym.css')}}">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <div class="TPBS-list">
  	<div class="TPBS-list-product1">
  		<p><span class="glyphicon glyphicon-th-list" style="margin-right: 3%"></span><b style="font-family: Montserrat">DANH MỤC SẢN PHẨM</b></p>
  	</div>
  	<div class="TPBS-list-product2">
  		<p><span class="glyphicon glyphicon-earphone" style="margin-right: 3%"></span><b style="font-family: Montserrat">Liên hệ đặt hàng ngay</b></p>
  	</div>
  	<div class="TPBS-list-product3">
  		<p><span class="glyphicon glyphicon-thumbs-up" style="margin-right: 3%"></span><b style="font-family: Montserrat">Sản phẩm 100% chính hãng</b></p>
  	</div>
  	<div class="TPBS-list-product3">
  		<p><span class="glyphicon glyphicon-plane" style="margin-right: 3%"></span><b style="font-family: Montserrat">Giao hàng nhanh nhất</b></p>
  	</div>
  	<div class="TPBS-list-product3">
  		<p><span class="glyphicon glyphicon-sort" style="margin-right: 3%"></span><b style="font-family: Montserrat">7 ngày đổi trả dễ dàng</b></p>
  	</div>
  </div>
  <div class="TPBS-menu">
  	<div class="TPBS-menu-list">
  		<div class="TPBS-menu-list1">
        <img src="https://image.flaticon.com/icons/svg/1616/1616487.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Cơ, Giảm Mỡ</b></p>
    </div>

    <div class="TPBS-menu-list1">
        <img src="https://image.flaticon.com/icons/svg/1/1358.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Cân</b></p>
    </div>
    <div class="TPBS-menu-list1">
        <img src="https://image.flaticon.com/icons/svg/1468/1468326.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Sức Mạnh</b></p>
    </div>

    <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

  <li class="dropdown-submenu">
    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#" style="padding-left: 0px;padding-right: 0px">
        <img src="https://image.flaticon.com/icons/svg/706/706142.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b style="margin-right: 63px">Năng lượng</b></p><i class='fas fa-caret-right' style="float: left;padding-top: 4%;margin-left: 1px"></i>
        
      </a>
         <ul class="dropdown-menu">
        <li class="dropdown-submenu">
        <a href="#"><b style="font-size: 16px">Năng lượng GYM</b><i class='fas fa-caret-right' style="padding-top: 4%;margin-left: 125px"></i></a>
        
          <ul class="dropdown-menu">
          <li><a href="#"><b>Pre-workout</b></a></li>
          <li><a href="#"><b>Intra-workout</b></a></li>
          <li><a href="#"><b>Thời điểm khác</b></a></li>
          
        </ul>

      </li>
      <li class="dropdown-submenu">
        
        <a href="#"><b style="font-size: 16px">Phục hồi cơ thể</b><i class='fas fa-caret-right' style="padding-top: 4%;margin-left: 150px"></i></a>
          <ul class="dropdown-menu">
          <li><a href="#"><b>BCAA</b></a></li>
          <li><a href="#"><b>Amino Acids</b></a></li>
          <li><a href="#"><b>Hỗ trợ sức khỏe khác</b></a></li>
         
        </ul>

      </li>
      
        </ul>
       </li>
    
      </div>
     
     <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

  <li class="dropdown-submenu">
    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#" style="padding-left: 0px;padding-right: 0px">
        <img src="https://image.flaticon.com/icons/svg/185/185606.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b style="margin-right: 80px">Giảm Cân</b></p><i class='fas fa-caret-right' style="float: left;padding-top: 4%;margin-left: 3px"></i>
        
      </a>
         <ul class="dropdown-menu">
        <li class="dropdown-submenu">
        <a href="#"><b style="font-size: 16px">Protein hỗ trợ</b><i class='fas fa-caret-right' style="padding-top: 4%;margin-left: 125px"></i></a>
        
          <ul class="dropdown-menu">
          <li><a href="#"><b>Whey thấp năng lượng</b></a></li>
          <li><a href="#"><b>Bữa ăn thông minh</b></a></li>
          
        </ul>

      </li>
      <li class="dropdown-submenu">
        
        <a href="#"><b style="font-size: 16px">Fat-burner</b><i class='fas fa-caret-right' style="padding-top: 4%;margin-left: 150px"></i></a>
          <ul class="dropdown-menu">
          <li><a href="#"><b>Mạnh - Hiệu quả nhanh</b></a></li>
          <li><a href="#"><b>Vừa - Duy trì vóc dáng</b></a></li>
         
        </ul>

      </li>
      
        </ul>
       </li>
    
      </div>
    
     <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

  <li class="dropdown-submenu">
    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#" style="padding-left: 0px;padding-right: 0px">
        <img src="https://image.flaticon.com/icons/svg/2051/2051648.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b style="margin-right: 19px">Vitamin, Khoáng</b></p><i class='fas fa-caret-right' style="float: left;padding-top: 4%;margin-left: 3px"></i>
        
      </a>
         <ul class="dropdown-menu">
        <li class="dropdown-submenu">
        <a href="#"><b style="font-size: 16px">Bổ sung vitamin</b></a>
        <a href="#"><b style="font-size: 16px">Tăng hóc môn nam</b></a>
        <a href="#"><b style="font-size: 16px">Bổ sung dầu cá</b></a>
      </li>
      
      
        </ul>
       </li>
    
      </div>

    <div class="TPBS-menu-list1">
        <img src="https://image.flaticon.com/icons/svg/603/603782.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Năng Lượng</b></p>
    </div>
 
    <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

  <li class="dropdown-submenu">
    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#" style="padding-left: 0px;padding-right: 0px">
        <img src="https://image.flaticon.com/icons/svg/780/780118.svg">
      <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b style="margin-right: 48px">Whey Protein</b></p><i class='fas fa-caret-right' style="float: left;padding-top: 4%;margin-left: 3px"></i>
        
      </a>
         <ul class="dropdown-menu">
        <li class="dropdown-submenu">
        <a href="#"><b style="font-size: 16px">Protein hoàn chỉnh</b><i class='fas fa-caret-right' style="padding-top: 4%;margin-left: 125px"></i></a>
        
          <ul class="dropdown-menu">
          <li><a href="#"><b>Mass cao Calories</b></a></li>
          <li><a href="#"><b>Mass trung Calories</b></a></li>
          <li><a href="#"><b>Bữa ăn thay thế</b></a></li>
          <li><a href="#"><b>TPBS tiết kiệm</b></a></li>
        </ul>

      </li>
      <li class="dropdown-submenu">
        
        <a href="#"><b style="font-size: 16px">Whey - Casein protein</b><i class='fas fa-caret-right' style="padding-top: 4%;margin-left: 100px"></i></a>
          <ul class="dropdown-menu">
          <li><a href="#"><b>Whey isolate protein</b></a></li>
          <li><a href="#"><b>Whey blend</b></a></li>
          <li><a href="#"><b>Casein</b></a></li>
        </ul>

      </li>
      
        </ul>
       </li>
    
      </div>
  	</div>
  	<div class="TPBS-menu-img">
  		<div class="TPBS-menu-img-carosel">
  			<div class="TPBS-menu-img-carosel1">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="3" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="4" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="5" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="6" style="border: 2px solid black;background-color: #FFF056"></li>
      <li data-target="#myCarousel" data-slide-to="7" style="border: 2px solid black;background-color: #FFF056"></li>
      '<li data-target="#myCarousel" data-slide-to="8" style="border: 2px solid black;background-color: #FFF056"></li>
      '<li data-target="#myCarousel" data-slide-to="9" style="border: 2px solid black;background-color: #FFF056"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">

        <img src="http://www.etiquetas.com.br/wp-content/uploads/2017/08/best-whey-banner-site-prod.jpg" alt="Los Angeles" style="width:100%;height: 428px">
      </div>

      <div class="item">
        <img src="https://tesla-nutrition.com/images/headers/header-whey-charger-100.jpg" alt="Chicago" style="width:100%;height: 428px">
      </div>
    
      <div class="item">
        <img src="https://superior14.shop/images/descripciones/header-bcaa-2-1-1.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.dinhduongthehinh.com/wp-content/uploads/2019/05/serious-mass-vi-nao-ngon.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="http://www.tesla-nutritions.com/images/headers/header-mass-super-charger.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.gannikus.de/wp-content/uploads/2017/02/biotechusa-shaper-von-ulisses-mitentwickelter-fatburner.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.ironmansuplementos.com.br/app/userfiles/WHEY%20ON%20(Refil)%20Optimum%20Nutrition%20banners.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="http://www.nutratec.com.br/wp-content/uploads/2016/11/Banner-Nutratec-e1478888989579.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://www.optimumnutrition.com/sites/g/files/mrktmf206/files/styles/article_full_width/public/782ee805d09fa868c391d515e9124fcefdcc82001.jpg?itok=qovD9sBW" alt="New york" style="width:100%;height: 428px">
      </div>
      <div class="item">
        <img src="https://soaressuplementos.com.br/wp-content/uploads/2016/10/banner-thermo-abdomen-1.jpg" alt="New york" style="width:100%;height: 428px">
      </div>
    </div>

  </div>
</div>
  		</div>
  		<div class="TPBS-menu-img2">
  			<img src="https://http2.mlstatic.com/whey-coffee-caffe-late-proteina-pra-tomar-quentinha-D_NQ_NP_712758-MLB27957017017_082018-F.jpg" style="height: 214px;width: 100%">

  			<img src="http://sg.suppsshop.com/media/catalog/product/cache/2/small_image/700x700/9df78eab33525d08d6e5fb8d27136e95/d/y/dymatize_elite_whey_protein.png" style="height: 214px;width: 100%">
  		</div>
  	</div>
  </div>
  <div class="TPBS-undermenu-img">
  	<div class="TPBS-undermenu-img1">
  		<img src="https://image.prestomall.com//editorImg/2017/01/15/51100293/2017011517241511336.jpg" style="height: 300px;width: 95%;">
  	</div>
  	<div class="TPBS-undermenu-img2">
  		<img src="http://tangcangiamcan.com/DATA/linhvp/tintuc/2-17/serious%20mass-va-whey%20protein-la-hai-dong-sua-the-hinh-cao-cap-hien-nay.jpg" style="height: 300px;width: 100%">
  	</div>
  </div>
  <div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext" id="whey">WHEY PROTEIN</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      @foreach ($whey1 as $value)
  		<div class="TPBS-detail-product1" >
  			<img src="upload/product/{{$value->image}}" id="hinh" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw{{$value->id}}"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<a href="detail_product/{{$value->id}}?l=WHEY PROTEIN" style="text-decoration: none;"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p></a>
      <p style="font-family: Montserrat;font-size: 18px;color: white">{{$value->weight}}</p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify">{{$value->detail}}</p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike>{{$value->onsale}}</strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056" id="giasp"><b>{{$value->price}}</b></p>
        </div>  
    </div>
              </div>
              <script type="text/javascript">
      $("#but-cartw{{$value->id}}").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
    });
       var btn=document.getElementById("but-cartw{{$value->id}}");
        var id={{$value->id}};
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: "{{route('insertcart')}}",
            type: "POST",
            data: {
                   
              loai: $("#whey").text(),
              ten: $("#tensp{{$value->id}}").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status==1) {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>
              @endforeach
              
  	</div>
    <div class="TPBS-detail-product">
      @foreach ($whey2 as $value)
      <div class="TPBS-detail-product1" >
        <img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
         <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#whey").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>
              @endforeach
              
    </div>
    <div class="TPBS-detail-product">
      @foreach ($whey3 as $value)
      <div class="TPBS-detail-product1" >
        <img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
         <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#whey").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>
              @endforeach
              
    </div>
  </div>
  <div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext" id="bcaa">BCAA</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      @foreach ($bbca1 as $value)
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>

              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#bcaa").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>

      @endforeach
             
  		</div>
      <div class="TPBS-detail-product">
        @foreach ($bbca2 as $value)
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>

              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#bcaa").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>

        @endforeach
              <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>	
  		</div>
  	</div>
  	<div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext" id="tangcan">SỮA TĂNG CÂN</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      @foreach ($tangcan1 as $value)
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>

              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#tangcan").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>

      @endforeach
  		</div>
      <div class="TPBS-detail-product">
        @foreach ($tangcan2 as $value)
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>

              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#tangcan").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>

        @endforeach
  		</div>
  		<div class="TPBS-detail-product">
        @foreach ($tangcan3 as $value)
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;" align="justify"><?php echo $value['detail'] ?></p>
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>

              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#tangcan").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>

              @endforeach
              <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
  		</div>
        
  	</div>
  	<div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext" id="vitamin">VITAMIN KHOÁNG</p>
    </div>
    <div class="TPBS-detail3"></div>
  	
  	<div class="TPBS-detail-product">
      @foreach ($vitamin1 as $value)
      
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
      
              <div class="TPBS-detail-product1-price">
        <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px"><strike><?php echo $value['onsale'] ?></strike></p>
                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>
       
       <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#vitamin").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>

      @endforeach

  		</div>
      <div class="TPBS-detail-product">
        @foreach ($vitamin2 as $value)
          
  		<div class="TPBS-detail-product1">
  			<img src="upload/product/{{$value->image}}" style="height: 270px;width: 100%" class="image">
  			 <div class="TPBS-middle-image">
                  <button><span class="glyphicon glyphicon-search"></span></button>
                  <button id="but-cartw<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                  <button><span class="glyphicon glyphicon-heart"></span></button>
              </div>
              <div class="TPBS-detail-product1-text">
              	<p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white" id="tensp<?php echo $value['id'] ?>"><b><?php echo $value['name'] ?></b></p>
      <p style="font-family: Montserrat;font-size: 18px;color: white"><?php echo $value['weight'] ?></p>
              <div class="TPBS-detail-product1-price">                <p style="font-family: Montserrat;font-size: 25px;color: #FFF056"><b><?php echo $value['price'] ?></b></p>
        </div>  
    </div>
              </div>

              <script type="text/javascript">
      $("#but-cartw<?php echo $value['id'] ?>").on('click', function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
       var btn=document.getElementById("but-cartw<?php echo $value['id'] ?>");
        var id=<?php echo $value['id'] ?>;
        if (btn.style.color=='') {
          btn.style.color='#FFF056';
          btn.style.border='3px solid #FFF056';
          $.ajax({
            url: 'insert_giohang',
            type: 'POST',
            data: {
                   
              loai: $("#vitamin").text(),
              ten: $("#tensp<?php echo $value['id'] ?>").text(),
              id: id
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status=='thanhcong') {
              alert("Đã thêm vào giỏ hàng");
            }
            else{
             alert("Sản phẩm đã tồn tại trong giỏ hàng"); 
             btn.style.color='';
          btn.style.border='';
            }
          });
        }
        else{
          alert("Có lỗi");
        }
         
        
        
      });
        
    </script>


        @endforeach
              
              <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
  		</div>
  	</div>
  	<div class="TPBS-detail">
    <div class="TPBS-detail1"></div>
    <div class="TPBS-detail2">
    	<p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px" class="hovertext">BÀI VIẾT KHÁC</p>
    </div>
    <div class="TPBS-detail3"></div>

  	<div class="TPBS-another">
  		<div class="TPBS-another1">
  			<iframe src="https://www.youtube.com/embed/dp-ujxDSM-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 420px;"></iframe>
  			<p style="font-family: Montserrat;font-size: 25px;" class="hovertext"><b>Tập ngực sao cho ngực to dày rộng và hiệu quả</b></p>
  		</div>
  		<div class="TPBS-another2">
        @foreach ($baitap as $value)
  			<div class="TPBS-another2-detail" style="padding-top: 0%">
  				<img src="upload/baitap/{{$value->image}}" >
  				<p style="font-family: Montserrat;font-size: 20px;" class="hovertext"><b><?php echo $value['name'] ?></b></p>
  				<p style="font-family: Montserrat;font-size: 15px;color: white"><?php echo $value['detail'] ?></p>
  			</div>
        @endforeach
  		</div>
  	</div>
  	<div class="TPBS-underanother">
      @foreach ($baitap1 as $value)
  		<div class="TPBS-underanother-detail1 hovertext">
  			<img src="upload/baitap/{{$value->image}}" style="height: 180px;width: 100%;float: left;">

  				<p style="font-family: Montserrat;font-size: 17px;text-align: center;">{{$value->name}}</p>
  		</div>
      @endforeach
  	</div>
  	</div>
  	<div class="TPBS-img-end">
  		<div class="TPBS-img-end1">
  			<img src="https://www.thol.com.vn/pub/media/wysiwyg/Flash-sale/thang-co-hon-sale-het-hon.jpg" style="height: 500px;width: 100%;">
  		</div>
  		<div class="TPBS-img-end2">
  			<img src="https://img.kam.vn/images/375x0/e3e82d7d33b84089a96b71777f28e52d/adayroi-com-principle-nutrition-uu-dai-den-29-qua-tang-hap-dan.jpg" style="height: 250px;width: 100%;">
  			<img src="https://wheyshop.vn/wp-content/uploads/2018/02/thuc-pham-bo-sung-outlift-1-compressed.jpg" style="height: 250px;width: 100%;">
  		</div>
  	</div>

     @include("GYMHTML.footer")
   
</body>
</html>