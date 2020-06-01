<!DOCTYPE html>
<html>
<head>
	<title>VNGYM - The World Of Gymer</title>
	 	<link rel="stylesheet" type="text/css" href="{{asset('/GYMCSS/admin.css')}}">
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
      <a href="{{route('viewinsertpt')}}" class="hovermenu" style="text-decoration: none;"><i class=' fas fa-user-plus' style="margin-right: 3%;"></i>Thêm</a>
    </div>
    <button class="dropdown-btn hovermenu"><i class=' fa fa-id-card' style="margin-right: 2%"></i>Các bài tập
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="#" class="hovermenu" style="text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%;"></i>Danh sách</a>
      <a href="#" class="hovermenu" style="text-decoration: none;"><i class=' fas fa-user-plus' style="margin-right: 3%;"></i>Thêm</a>
    </div>
     <a href="{{route('listcomment')}}" class="hovermenu" style="
   text-decoration: none;"><i class=" fas fa-assistive-listening-systems" style="margin-right: 3%"></i>Đánh giá sản phẩm</a>
   <a href="{{route('listpay')}}" class="hovermenu" style="
   text-decoration: none;"><i class='fas fa-list-ol' style="margin-right: 3%"></i>Danh sách đơn hàng</a>
   <a href="{{route('doanhthu')}}" class="hovermenu" style="
   text-decoration: none;"><i class=' fas fa-money-bill-wave' style="margin-right: 3%"></i>Doanh thu</a>
      </div>
     

</body>
</html>
