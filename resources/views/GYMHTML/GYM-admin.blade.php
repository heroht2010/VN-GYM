<!DOCTYPE html>
<html>
<head>
	<title>VNGYM - The World Of Gymer</title>
	 	<link rel="stylesheet" type="text/css" href="{{asset('GYMCSS/admin.css')}}">
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

   @include("GYMHTML.navbar_admin")

   <div class="frame">

     <div class="menu">
       @include("GYMHTML.menuadmin")
     </div>

      <div class="content">

        <div class="thongke">
         <div class="thongke-detail">
           <b style="font-size: 20px;font-family: Montserrat;color: white">CÁC BÀI TẬP</b>
           <p style="font-size: 15px;font-family: Montserrat;color: white">25,300 truy cập</p>
         </div>  

         <div class="thongke-detail2">
           <b style="font-size: 20px;font-family: Montserrat;color: white">SẢN PHẨM</b>
           <p style="font-size: 15px;font-family: Montserrat;color: white">100,300 truy cập</p>
         </div>  

         <div class="thongke-detail3">
           <b style="font-size: 20px;font-family: Montserrat;color: white">DỤNG CỤ</b>
           <p style="font-size: 15px;font-family: Montserrat;color: white">25,325 truy cập</p>
         </div>  

         <div class="thongke-detail4">
           <b style="font-size: 20px;font-family: Montserrat;color: white">PHỤ KIỆN</b>
           <p style="font-size: 15px;font-family: Montserrat;color: white">50,389 truy cập</p>
         </div>  
        </div>
       
       <div class="chart">
         <div id="piechart" style="float: left;"></div>
         <div id="piechart1" style="float: left;"></div>
       </div>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
   ['Whey Protein', 180],
  ['BCAA', 120],
  ['Tăng Cân', 40],
  ['Vitamin Khoáng', 30]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Sản phẩm bán/tháng', 'width':485, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Máy Móc', 50],
  ['Tạ, Thanh Đòn', 200],
  ['Dụng Cụ', 90],
  ['Khác', 29],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Phụ kiện bán/tháng', 'width':485, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}
</script>
</html>