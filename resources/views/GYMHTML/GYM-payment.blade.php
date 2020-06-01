<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/payment.css')}}">
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
      <p style="float: left;margin-right: 4%;margin-left: 14%"><span class="glyphicon glyphicon-phone-alt" style="color: #FFF056"></span>Hotline: +2 392 3929 210</p>
      <div class="dropdown">
 <a href="#" style="font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;" class="hovertext">
  <span class="glyphicon glyphicon-user use"></span>{{session()->get('user')}}<i class="fa fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-user" style="margin-right: 3%"></span>Thông Tin Cá Nhân</a>
    <a href="{{route('giohang')}}" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 3%"></span>Giỏ Hàng Của Tôi</a>
    <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-heart" style="margin-right: 3%"></span>Sản Phẩm Yêu Thích</a>
     <a href="{{route('payment')}}" style="text-decoration: none;"><i class='fas fa-truck' style="margin-right: 3%"></i>Đơn Hàng Của Tôi</a>
    <a href="{{route('dangxuat')}}" style="text-decoration: none;"><span class="glyphicon glyphicon-log-out" style="margin-right: 3%"></span>Đăng Xuất</a>
  </div>
</div>
  		
  	</div>
  </div>
  <div class="TPBS-title">
  	<div class="TPBS-title-logo">
  		<a href="{{route('trangchu')}}" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
  	</div>
  	<div class="TPBS-title-search">
  		<input type="text" name="tim" placeholder="Nhập sản phẩm cần tìm......" style="font-family: Montserrat;font-size: 16px">
  		<button><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
  	</div>
  	<div class="TPBS-title-cart">
      <?php 
       if (session()->get('user')!='') {
        echo '<a href="'.route("giohang").'"><button><span class="glyphicon glyphicon-shopping-cart"></span><b style="font-family: Montserrat;margin-left: 3%;text-decoration: none;">Giỏ hàng</b></button></a>';
               }
       else{
         echo '<a href="'.route("dangnhap").'"><button><span class="glyphicon glyphicon-shopping-cart"></span><b style="font-family: Montserrat;margin-left: 3%;text-decoration: none;">Giỏ hàng</b></button></a>';

       }
       ?>
  		
  	</div>
  </div>
 <div class="PAY-content">

   <div class="PAY-profile">

     <div class="profile-detail">
       <div class="profile-detail-image">
         <img src="https://cf.shopee.vn/file/d27f4ee035c16d4f12d8e8e1f70d1fed_tn" style="height: 60px;width: 100%;float: left;border-radius: 50%;">
       </div>
       <div class="profile-detail-text">
         <p style="margin-bottom: 1px;font-size: 16px;color: #FFF056"><b>{{session()->get('user')}}</b></p>
         <p><i class="fa fa-pencil-square-o" style="margin-right: 2%"></i>Sửa Hồ Sơ</p>
       </div>
     </div>
     <hr style="clear: both;border:0.5px solid gray">
      
      <div class="profile-detail1">
       <div class="profile-detail-image1">
         <img src="https://image.flaticon.com/icons/svg/1256/1256661.svg" style="height:30px;width: 100%;float: left;">
       </div>
       <div class="profile-detail-text1">
         <p style="font-size: 15px;padding-top: 2%">Tài Khoản Của Tôi</p>
         
       </div>
     </div>

     <div class="profile-detail1">
       <div class="profile-detail-image1">
         <img src="https://image.flaticon.com/icons/svg/1039/1039328.svg" style="height:30px;width: 100%;float: left;">
       </div>
       <div class="profile-detail-text1">
         <p style="font-size: 15px;padding-top: 2%">Đơn Mua Hàng</p>
         
       </div>
     </div>

     <div class="profile-detail1">
       <div class="profile-detail-image1">
         <img src="https://image.flaticon.com/icons/svg/1157/1157000.svg" style="height:30px;width: 100%;float: left;">
       </div>
       <div class="profile-detail-text1">
         <p style="font-size: 15px;padding-top: 2%">Thông Báo</p>
         
       </div>
     </div>

     <div class="profile-detail1">
       <div class="profile-detail-image1">
         <img src="https://image.flaticon.com/icons/svg/2156/2156156.svg" style="height:30px;width: 100%;float: left;">
       </div>
       <div class="profile-detail-text1">
         <p style="font-size: 15px;padding-top: 2%">Voucher</p>
         
       </div>
     </div>

   </div>

   <div class="PAY-trangthai">
     <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Tất cả</a></li>
    <li><a data-toggle="pill" href="#menu1">Chờ xác nhận</a></li>
    <li><a data-toggle="pill" href="#menu2">Đang giao</a></li>
     <li><a data-toggle="pill" href="#menu3">Đã giao</a></li>
      <li><a data-toggle="pill" href="#menu4">Đã hủy</a></li>
  </ul>

  <div class="search-bar">
    <input type="text" name="tim" placeholder="Tìm kiếm theo tên sản phẩm">
  </div>

  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">
       <?php foreach ($data as $key => $value): ?>
        <!--  -->
        
         <?php 
         if ($value->donhang()->first()->trangthai=='cho') {
           echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐANG XÁC NHẬN</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value->product()->get()->first()->name."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-detail'>Xem Chi Tiết Đơn Hàng</button><a href='".route('huydon')."?madh=".$value->madh."'><button class='btn-delete'>Hủy Đơn Hàng</button></a></p>
        </div>
      </div>

    </div>";
         }
         else{
          if ($value->donhang()->first()->trangthai=='dang') {
            echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐANG GIAO HÀNG</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value->product()->get()->first()->name."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-detail'>Xem Chi Tiết Đơn Hàng</button><button class='btn-delete'>Hủy Đơn Hàng</button></p>
        </div>
      </div>

    </div>";
          }
          else{
            if ($value->donhang()->first()->trangthai=='da') {
              echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐÃ GIAO</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value->product()->get()->first()->name."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-detail'>Xem Chi Tiết Đơn Hàng</button></p>
        </div>
      </div>

    </div>";
            }
            else{
              echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐÃ HỦY</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>
      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value->product()->get()->first()->name."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-delete'>Mua lần nữa</button><button class='btn-chitiet'>Chi tiết</button></p>
        </div>
      </div>

    </div>";
            }
          }
         }
          ?> 
      
   <?php endforeach ?>
   </div>
   
    <div id="menu1" class="tab-pane fade">
     <?php foreach ($data as $key => $value): ?>
       <?php 
       if ($value->donhang()->first()->trangthai=='cho') {
         echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐANG XÁC NHẬN</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value['tensp']."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-detail'>Xem Chi Tiết Đơn Hàng</button><button class='btn-delete'>Hủy Đơn Hàng</button></p>
        </div>
      </div>

    </div>";
       }
       else{
        echo "";
       }
        ?>
     <?php endforeach ?>
    </div>

    <div id="menu2" class="tab-pane fade">
      <?php foreach ($data as $key => $value): ?>
        <?php 
         if ($value->donhang()->first()->trangthai=='dang') {
           echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐANG GIAO HÀNG</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value['tensp']."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-detail'>Xem Chi Tiết Đơn Hàng</button><button class='btn-delete'>Hủy Đơn Hàng</button></p>
        </div>
      </div>

    </div>";
         }
         ?>
      <?php endforeach ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <?php foreach ($data as $key => $value): ?>
        <?php 
          if ($value->donhang()->first()->trangthai=='da') {
             echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐÃ GIAO</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value['tensp']."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-detail'>Xem Chi Tiết Đơn Hàng</button></p>
        </div>
      </div>

    </div>";
           } 
         ?>
      <?php endforeach ?>
    </div>
    <div id="menu4" class="tab-pane fade">
     <?php foreach ($data as $key => $value): ?>
       <?php 
         if ($value->donhang()->first()->trangthai=='huy') {
           echo "<div class='detail-tab'>
      <div class='tab-title'>

        <div class='title-type'>
          <p><b>".$loai."</b></p>
        </div>

        <div class='title-trangthai'>
          <p style='color: #FFF056'>ĐÃ HỦY</p>
        </div>

      </div>
      <hr style='clear: both;border: 0.5px solid gray'>

      <div class='tab-title' style='margin-bottom: 2%'>

        <div class='title-image'>
          <img src='../upload/product/".$value->product()->get()->first()->image."' style='height: 80px;width: 100%;float: left;'>
        </div>

        <div class='title-detailproduct'>
          <p style='font-size: 17px;margin-bottom: 1px'>".$value['tensp']."</p>
          <p style='font-size: 13px;margin-bottom: 1px'>Hương vị: ".$value['huongvisp']."</p>
          <p style='font-size: 15px'>X ".$value['soluong']."</p>
        </div>
        
        <div class='title-price'>
          <p>".$value['dongia']."</p>
        </div>
      </div>
      <hr style='clear: both;border: 0.5px solid gray;'>
      
      <div class='tab-title'>

        <div class='title-space'>
          
        </div>

        <div class='title-sum'>
          <p><span><img src='https://image.flaticon.com/icons/svg/755/755195.svg' style='height: 30px;width: 30px;'></span><span style='margin-right: 1%;font-size: 15px'>Số tiền phải trả:</span><span style='font-size: 26px;color: #FFF056'><b>".$value['tongtien']."</b></span></p>
        </div>
      </div>

      <div class='tab-title'>

        <div class='title-space1'>
          
        </div>

        <div class='title-button'>
          <p><button class='btn-delete'>Mua lần nữa</button><button class='btn-chitiet'>Chi tiết</button></p>
        </div>
      </div>

    </div>";
         }
        ?>
     <?php endforeach ?>
    </div>
  </div>
   </div>

 </div>
  
</body>
</html>