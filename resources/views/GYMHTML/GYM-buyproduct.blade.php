<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/thanhtoan.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
	
  <div class="GH-login">
  	<div class="GH-login1">
  		<p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell" style="color: #FFF056"></span>Thông báo</p>
  		<p style="float: left;margin-right: 4%" class="hovertext"><span class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
  	</div>
  	<div class="GH-login2">
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
  <div class="GH-title">
  	<div class="GH-title-logo">
  		<a href="{{route('trangchu')}}" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
  	</div>
  	<div class="GH-title-giohang">
  			<p><b style="font-family: Montserrat">THANH TOÁN</b></p>
  	</div>
  	<div class="GH-title-search">
  		<input type="text" name="tim" placeholder="Kinh doanh phải đi đôi với chữ TÍN" style="font-family: Montserrat;font-size: 16px">
  		<button><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
  	</div>
  	
  </div>
  <div class="content">

  <div class="locate">
    <p style="color: #FFF056;font-size: 23px;margin-bottom: 2%"><b>Địa Chỉ Nhận Hàng</b></p>
    @foreach ($info as $value)
      
    <div class="locate-name">
      <p style="font-size: 16px"><b>Tên</b></p>
      <p id="nameuser">{{$value->ho}}{{$value->ten}}</p>
    </div>
    <div class="locate-phone">
      <p style="font-size: 16px"><b>Số điện thoại</b></p>
      <p id="sdt">{{$value->sdt}}</p>
    </div>
    <div class="locate-addre">
      <p style="font-size: 16px"><b>Địa chỉ</b></p>
      <p id="address">{{$value->diachi}}</p>
    </div>
    <div class="locate-change">
      <p style="text-align: center;">THAY ĐỔI</p>
    </div>

    @endforeach 
  </div>

  <div class="detail-product">
   
   <div class="detail-product1">
  <div class="detail-product-name">
    <p style="font-size: 20px;color: #FFF056"><b>Sản phẩm</b></p>
    
  </div>

  <div class="detail-product-price">
    <p class="none">Đơn giá</p>
  </div>

  <div class="detail-product-count">
    <p class="none">Số lượng</p>
  </div>

  <div class="detail-product-bonus">
    <p class="none">Khuyến mãi</p>
  </div>

  <div class="detail-product-sum">
    <p class="none">Thành tiền</p>
  </div> 

  </div>

  <div class="detail-product2">
   @foreach ($product as $value)
     <?php $hinh=$value->image; 
     ?>
  <div class="detail-product-name">
    <div class="detail-product-name-image">
      <div class="detail-product-image">
        <img src="{{asset("upload/product/$value->image")}}" style="width: 100%;height: 80px;float: left;" id="image">
      </div>
      <div class="detail-product-text">
        <p style="margin-bottom: 1px;color: #FFF056" id="name"><?php echo $value['name'] ?></p>
        <p id="weight">{{$value->weight}}</p>
      </div>
    </div>
    <div class="detail-product-name-type">
     <p>Hương vị: <span style="color: #FFF056" id="huongvi">{{$vi}}</span></p>
    </div>
  </div>

  <div class="detail-product-price">
    <p id="price">{{$value->price }}</p>
  </div>

  <div class="detail-product-count">
    <p id="soluong">{{$soluong}}</p>
  </div>

  <div class="detail-product-bonus">
    <p></p>
  </div>

  <div class="detail-product-sum">
    <p id="tien"></p>
  </div> 
   <script type="text/javascript">
     var dongia=$("#price").text();
     var soluong=$("#soluong").text();
     var sum;
     dongia=dongia.replace(/[^0-9\s]/gi, '');
     sum=parseInt(dongia)*parseInt(soluong);
     $("#tien").text(sum+" VNĐ");
   </script>
  </div>
  @endforeach
  <hr style="clear: both;margin-top: 15%;border: dotted;">
  <div class="detail-product2">
    <div class="detail-product1-mes">
      <p><span style="float: left;margin-right: 4%;">Lời nhắn: </span><input type="text" name="mess" placeholder="Lưu ý cho người bán hàng" id="note"></p>
    </div>
    <div class="detail-product1-delivername">
      <p>Đơn vị vận chuyển:</p>
    </div>
    <div class="detail-product1-delivery">
      <p style="font-size: 20px" id="namedeli"><b>Vận Chuyển Nhanh</b></p>
       <p style="font-size: 15px">Giao Hàng Tiết Kiệm</p>
       <p style="font-size: 13px">Nhận hàng vào 1 Th11 - 2 Th11</p>
    </div>
    <div class="detail-product1-change">
      <p>THAY ĐỔI</p>
    </div>
    <div class="detail-product1-price">
      <p id="costdeli">40,000 VNĐ</p>
    </div>
  </div>

   <div class="detail-product2">
     <p style="float: right;" class="sum">Tổng số tiền({{$soluong}} sản phẩm): <span style="font-size: 25px;color: #FFF056;" ><b id="sumall"></b></span></p>
   </div>
   <hr style="clear: both;margin-top: 15%;border: dotted;">

   <div class="detail-product2">
    <div class="detail-product1-bonus">
      <p style="font-size: 19px;color: #FFF056">Mã giảm giá</p>
    </div>
    <div class="detail-product1-setbonus">
      <input type="text" id="bonus" name="bonus" placeholder="Nhập mã giảm giá">
      <button id="btn-bonus">Xong</button>
      
    </div>  
   </div>
    

    <div class="detail-product2">
    <p>
      <span style="float: left;font-size: 17px">Phương thức thanh toán:</span>
      <span><button class="apay">Ví AirPay</button></span>
      <span><button class="crecard">Thẻ Tín dụng/Ghi nợ</button></span>
      <span><button class="atm">Thẻ ATM nội địa (Internet Banking)</button></span>
      <span><button class="done">Thanh toán khi nhận hàng</button></span>
    </p>  
    </div>
    <hr style="clear: both;margin-top: 15%;border: dotted;">

    <div class="detail-product2">
      <div class="detail-product2-space"></div>
      <div class="detail-product2-sum">
        <div class="detail-product2-sum1">
          <div class="detail-sum-name">
            <p >Tổng tiền hàng</p>
          </div>
          <div class="detail-sum-price">
            <p id="price-product"></p>
          </div>
        </div>
        <div class="detail-product2-sum1">
          <div class="detail-sum-name">
            <p>Phí vận chuyển</p>
          </div>
          <div class="detail-sum-price">
            <p id="price-deli"></p>
          </div>
        </div>
        <div class="detail-product2-sum1">
          <div class="detail-sum-name">
            <p>Mã giảm giá</p>
          </div>
          <div class="detail-sum-price">
            <p id="bonustext"></p>
            </div>
        </div>
        <div class="detail-product2-sum1" style="margin-bottom: 3%">
          <div class="detail-sum-name">
            <p style="padding-top: 6%">Tổng thanh toán</p>
          </div>
          <div class="detail-sum-price">
            <p style="color: #FFF056;font-size: 25px" ><b id="price-sum"></b></p>
          </div>
        </div>
        <div class="detail-product2-sum1">
          <center><button id="btn-pay">Đặt Hàng</button></center>
        </div>
   <script type="text/javascript">
      var bonus=0;
      var namebonus='';
      var tien=$("#tien").text();
     var tienvan=$("#costdeli").text();
     var sum;
     tien=tien.replace(/[^0-9\s]/gi, '');
     tienvan=tienvan.replace(/[^0-9\s]/gi, '');
     sum=parseInt(tien)+parseInt(tienvan);
     $("#sumall").text(sum+" VNĐ");

     var tien=$("#tien").text();
     var tienvan=$("#costdeli").text();
     var sum=$("#sumall").text();
     $("#price-product").text(tien);
     $("#price-deli").text(tienvan);
     $("#price-sum").text(sum);
     $("#bonustext").text(bonus);

      $("#btn-bonus").on('click',function(event){
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
          $.ajax({
            url: "{{route('bonus')}}",
            type: "POST",
            data: {
              makm:$("#bonus").val()
            },
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function(response) {
            if (response.status!=false) {
              if(response.status=='0 VNĐ'){
            $("#costdeli").text(response.status);
            tienvan=tienvan.replace(/[^0-9\s]/gi, '');
            sum=sum.replace(/[^0-9\s]/gi, '');
            sum=parseInt(sum)-parseInt(tienvan);
            $("#sumall").text(sum+" VNĐ");
            tien=$("#tien").text();
           
                  tienvan=$("#costdeli").text();
                 
                  sum=$("#sumall").text();
                  $("#price-product").text(tien);
                $("#price-deli").text(tienvan);
                $("#price-sum").text(sum);
            $("#bonustext").text('FREE SHIP');
              }
              else{
                 bonus=response.status;
                 sum=sum.replace(/[^0-9\s]/gi, '');
                 sum=sum*(bonus/100);
                  $("#sumall").text(sum+" VNĐ");
                 tien=$("#tien").text();
                  tienvan=$("#costdeli").text();
                 
                  sum=$("#sumall").text();
                  $("#price-product").text(tien);
                $("#price-deli").text(tienvan);
                $("#price-sum").text(sum);
                  $("#bonustext").text("GIẢM "+bonus+"%");
                  }

                  
                
            }
            else{
             alert("Có lỗi xảy ra"); 
            }
          });
        });
    </script>
      </div>
    </div>
   <hr style="clear: both;margin-top: 25%;border: dotted;">
    <script type="text/javascript">
      $("#btn-pay").on('click',function(event){
         var trangthai="cho";
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
          $.ajax({
            url: "{{route('donhang')}}",
            type: "POST",
            data: {
              madh:{{$value->id}},
              iduser: {{$iduser}},
             idpro: {{$idpro}},
              huongvi:$("#huongvi").text(),
              price: $("#price").text(),
              count:$("#soluong").text(),
              namedeli:$("#namedeli").text(),
              sum:$("#price-sum").text(),
              trangthai: trangthai,
              note:$("#note").val()
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
              window.location="{{route('payment')}}";
            }
            else{
             alert("Có lỗi xảy ra"); 
            }
          });
        });
    </script>
   </div>
</div>
@include("GYMHTML.footer")
</body>
</html>
