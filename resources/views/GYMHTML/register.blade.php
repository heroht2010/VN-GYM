<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/logout.css')}}">
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
</head>
<body>
	<div class="content">

	</div>
	<div class="detail">
		<a href="{{route('trangchu')}}" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
	</div>
	<div class="logout">
		<div class="logout-left">
			<img src="https://c8.alamy.com/comp/HDH06D/gym-membership-application-wellness-concept-HDH06D.jpg" style="height: 475px;width: 100%;">

		</div>
		<div class="logout-right">
		<center>
			<p style="font-family: Montserrat;font-size: 40px;color: #FFF056;text-align: center;margin-bottom: 1px" class="wow fadeInUp">Register Now</p>
			<p style="font-family: Montserrat;font-size: 20px;color: white;text-align: center;" class="wow fadeInUp">Welcome To With Us</p>
			<p id="loi" style="color: #FFF056;font-family: Montserrat"></p>
			<div class="logout-right1">
				<div class="logout-right1-lastname">
				<div class="logout-right-icon1"><span class="glyphicon glyphicon-inbox"></span></div><input type="text" name="ho" id="ho" class="logout_ten1" placeholder="Last Name">
			</div>
			<div class="logout-right1-firstname">
				<div class="logout-right-icon1"><span class="glyphicon glyphicon-inbox"></span></div><input type="text" name="ten" id="ten" class="logout_ten1" placeholder="First Name">
			</div>
				</div>
			
			<div class="logout-right2">
				<div class="logout-right-icon"><span class="glyphicon glyphicon-user"></span></div><input type="text" name="username" id="username" class="logout_ten" placeholder="User Name" >
			</div>
			<div class="logout-right2">
				<div class="logout-right-icon"><span class="
glyphicon glyphicon-lock"></span></div><input type="password" name="pass" id="pass" class="logout_ten" placeholder="Password" >
			</div>
			<div class="logout-right2">
				<div class="logout-right-icon"><span class="
glyphicon glyphicon-lock"></span></div><input type="password" name="repass" id="repass" class="logout_ten" placeholder="Confirm Password" >
<a href="{{route('dangnhap')}}" class="sari" style="text-decoration: none;"><p>I have already account</p></a>
			</div>
			<div class="logout-right2">
				<button class="btn-register" onclick="valid()"><span class="glyphicon glyphicon-send" style="padding-right: 3%;"></span>Register</button>
				
			</div>
		</center>
	</div>
	<div class="copyright">
		<center><p style="font-size: 18px;font-family: Montserrat;color: white;margin-top: 2%;"><b>Copyright ©2019 All rights reserved | Copyright of VN GYM company</b></p></center>
	</div>
	</div>
	<script type="text/javascript">
		function valid() {
			var ho=$("#ho").val();
			var ten=$("#ten").val();
		var user=$("#username").val();
		var pass=$("#pass").val();
		var repass=$("#repass").val();
		if (ho==''||ten==''||user==''||pass==''||repass=='') {
           document.getElementById("loi").innerHTML="Vui lòng nhập đầy đủ thông tin";
		}
		else{
			if (pass.length<9) {

				document.getElementById("loi").innerHTML="Password quá yếu";
				document.getElementById("pass").value='';
				document.getElementById("repass").value='';
			}
			if (pass!=repass) {
				document.getElementById("loi").innerHTML="Nhập lại password sai";
				document.getElementById("pass").value='';
				document.getElementById("repass").value='';
			}
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
    });
          $.ajax({
			url: "{{route('adduser')}}",
			type: "POST",
			data: {
				ho:$("#ho").val(),
				ten: $("#ten").val(),
				user:$("#username").val(),
				pass:$("#pass").val()
			},
		})
		.done(function(data) {
			console.log(data);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function(response) {
			if (response.status=='unsuccess') {
				document.getElementById("loi").innerHTML="Người dùng đã tồn tại";
				document.getElementById("username").value='';
			}
			else{
				window.location="{{route('dangnhap')}}";
			}
		});
		}
		}
		
	</script>
</body>
</html>