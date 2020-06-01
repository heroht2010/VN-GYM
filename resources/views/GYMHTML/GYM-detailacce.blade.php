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
   
   <div class="DT-content-image">
     <img src="" style="height: 500px;width: 100%;float: left;" id="hinhmain">
     <div class="DT-content-anotherimage">
       <img src="" style="height: 110px;width: 20%;float: left;padding-top: 5%;margin-right: 4%" id="hinhdetail1">
       <img src="" style="height: 110px;width: 20%;float: left;padding-top: 5%;margin-right: 4%"  id="hinhdetail2">
       <img src="" style="height: 110px;width: 20%;float: left;padding-top: 5%;margin-right: 4%"  id="hinhdetail3">
       <img src="" style="height: 110px;width: 20%;float: left;padding-top: 5%;margin-right: 4%"  id="hinhdetail4">

     </div>
   </div>
      <script type="text/javascript">
      $("#hinhdetail1").hover(function(){
       var img=$("#hinhdetail1").attr('src');
       var imgmain=$("#hinhmain").attr('src');
       $("#hinhmain").attr('src',img);
       $("#hinhdetail1").attr('src',imgmain);
      });
      $("#hinhdetail2").hover(function(){
       var img=$("#hinhdetail2").attr('src');
       var imgmain=$("#hinhmain").attr('src');
       $("#hinhmain").attr('src',img);
       $("#hinhdetail2").attr('src',imgmain);
      });
      $("#hinhdetail3").hover(function(){
       var img=$("#hinhdetail3").attr('src');
       var imgmain=$("#hinhmain").attr('src');
       $("#hinhmain").attr('src',img);
       $("#hinhdetail3").attr('src',imgmain);
      });
      $("#hinhdetail4").hover(function(){
       var img=$("#hinhdetail4").attr('src');
       var imgmain=$("#hinhmain").attr('src');
       $("#hinhmain").attr('src',img);
       $("#hinhdetail4").attr('src',imgmain);
      });
      </script>
   <div class="DT-content-info">

     <div class="DT-info-name">
       <p style="font-family: Montserrat;color: white" class="name"><b>fasasfasfasf</b></p>
       <div class="DT-info-nameunder">
         <div class="DT-info-nameunder-copyright">
           <p>Thương hiệu: <span style="background-color: #FFF056;color: black;border-radius: 3px">fasfasfasf</span></p>
         </div>
         <div class="DT-info-nameunder-star">
           <p>Đánh giá: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></p>
         </div>
         <div class="DT-info-nameunder-sold">
           <p>Đã bán: 4,2K</p>
         </div>
       </div>
       
     </div>

     <div class="DT-info-price">
       <div class='DT-info-onsale'>
         <p style='color: #b2b2b2'><strike>".$value->onsale."</strike></p>
         </div>
       
         
       
       <div class="DT-info-pricemain">
         <p><b>àasfasfasf</b></p>
       </div>
       <p style="font-family: Montserrat;float:left" class="tin"><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/d7cb3c110ef860cca3969ab0cd6c2ac9.png" style="height: 40px;width: 50px">Chữ<b style="color: #FFF056"> TÍN</b> luôn được đặt lên hàng đầu</p>
     </div>
    
    <div class="DT-info-delivery">

      <div class="DT-info-delivery-name">
        <p>Vận chuyển:</p>
      </div>
      <div class="DT-info-delivery-type">
        <div class="DT-info-delivery-type1">
          <p><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/9d21899f3344277e34d40bfc08f60bc7.png" style="height: 20px;width: 30px">Miễn phí vận chuyển</p>
          <p>Miễn phí vận chuyển cho những đơn hàng trong khu vực</p>
        </div>
        <div class="DT-info-delivery-type">
          <p><i class='fas fa-truck' style="font-size: 20px;color: #FFF056"></i><span>Vận chuyển tới</span><select><option>Hà Nội</option><option>TT Huế</option><option>Đăk Lăk</option><option>Đà Nẵng</option><option>Gia Lai</option><option>TP Hồ Chí Minh</option></select></p>
          <p><i class='  far fa-money-bill-alt' style="font-size: 20px;color: #FFF056"></i><span>Phí vận chuyển</span><select><option>27.000đ - 32.100đ</option></select></p>
        </div>
      </div>  

    </div>

    <div class="DT-info-option">
      <div class="DT-info-option-name">
        <p>Hương vị:</p>
      </div>
      <div class="DT-info-option-choose">
        <button class="choose1" id="huongvi1" onclick="huongvi1()" value="vani">vani</button><button id="huongvi2" onclick="huongvi2()" value="choco">afasfasf</button>
      </div>
    </div>

    <div class="DT-info-count">
      <div class="DT-info-count-name">
        <p>Số lượng:</p>
      </div>
      <div class="DT-info-count-adjust">
        <button id="giam">-</button><input type="text" name="soluong" id="soluong" value="1"><button id="tang">+</button>
      </div>
    </div>

    <div class="DT-info-buy">
     <p id="loi" style="color: #FFF056;font-family: Montserrat"></p>
      <div class="DT-info-buy-cart">
        <button><i class='fas fa-cart-plus' style="margin-right: 3%"></i>Thêm Vào Giỏ Hàng</button>
      </div>
      <div class="DT-info-buy-bought">
       <?php 
          if (session()->get('user')!='') {
            echo "<button id='buy'>Mua Ngay</button>";
          }
          else{
           echo "<a href='".route('dangnhap')."'><button>Mua Ngay</button></a>";
          }
        ?>
        
      </div>
    </div>
   <script type="text/javascript">
     function huongvi1(){
       var huong1=document.getElementById("huongvi1");
      var huong2=document.getElementById("huongvi2");
      if (huong2.style.color!='') {
       huong2.style.color='';
       huong2.style.border='';
       huong1.style.border='1px solid #FFF056';
       huong1.style.color='#FFF056';
      }
      else{
       huong1.style.border='1px solid #FFF056';
       huong1.style.color='#FFF056';
      }
     }
     function huongvi2(){
        var huong1=document.getElementById("huongvi1");
      var huong2=document.getElementById("huongvi2");
      if (huong1.style.color!='') {
       huong1.style.color='';
       huong1.style.border='';
       huong2.style.border='1px solid #FFF056';
       huong2.style.color='#FFF056';
      }
      else{
       huong2.style.border='1px solid #FFF056';
       huong2.style.color='#FFF056';
      }
     }
     $("#tang").on('click',function(event){
  
     var soluong=document.getElementById("soluong");
     
     if (parseInt(soluong.value)<6) {
       soluong.value=parseInt(soluong.value)+1;
     }
     else if ((parseInt(soluong.value)+1)>6) {
       confirm("Bạn muốn đặt hàng với số lượng lớn?");
     }

   });

   $("#giam").on('click',function(event){
     var soluong=document.getElementById("soluong");
     if (parseInt(soluong.value)>1) {
       soluong.value=parseInt(soluong.value)-1;
     }
     else if ((parseInt(soluong.value)-1)<1) {
       alert("Không giảm được nữa đâu bạn ơi");
     }
     
   });
   // $("#hinhdetail").mouseover(function(){
   //       var hinhdetail=$("#hinhdetail").attr("src");
   //       $("#hinhmain").attr(hinhmain);
   // });
      
   </script>
    </div>
  </div>    

    </div>

  </div>
  @include('GYMHTML.footer')
</body>
</html>