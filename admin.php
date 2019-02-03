<html>
<head><title>Huzion - Admin panel</title>
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/charts/Chart.bundle.js"></script>
<script src="js/charts/utils.js"></script>
</head>
<style>
#in-style{
font-family: Times New Roman;
text-decoration:none;
 font-size: 18px;
 opacity: 0.9;
  border: none; 
  font-weight: bold; 
  width: 100%;
}
#canvas{
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
	width:100%;
}

#chart-containner {
width:70%;
height:100%;
position:relative;
}
.pie-chart{
height:350px;
width:23%;
position:absolute;
border: solid #99FFFF;
top:10px;
right:2px;
}
</style>
<?php
@session_start();
?>
<body>
<table border="" class="welcome-content" height="100%">
<tr>
<td width="250px">
<table border="0" width="100%" align="center" style="margin-top:-290px;">
<tr><td bgcolor="black" style="color: white; padding: 12px; width:100%">Profile</td></tr>
                 <tr><td><a href="#" id="in-style"> <i class="fa fa-home"></i> Home</a></td></tr>
<tr><td>&nbsp;</td></tr>
                  <tr><td><a href="#" id="in-style"> <i class="fa fa-user"></i> Add user</a></td></tr>
<tr><td>&nbsp;</td></tr>
                  <tr><td><a href="#" id="in-style"> <i class="fa fa-envelope"></i> Mail box</a></td></tr>
<tr><td>&nbsp;</td></tr>
                  <tr><td><a href="aprove.php" id="in-style"> <i class="fa fa-edit"></i> Aprove products</a></td></tr>
<tr><td>&nbsp;</td></tr>
                  <tr><td><a href="price.php" id="in-style"> <i class="fa fa-edit"></i> Set Price</a></td></tr>
<tr><td>&nbsp;</td></tr>
                  <tr><td><a href="#" id="in-style"> <i class="fa fa-lock"></i> Unipublish</a></td></tr>
</table>
</td>
<td>
<div id="chart-containner">
<canvas id="canvas"></canvas>
</div>
<div class="pie-chart">Pie chart
<canvas id="pie_canvas"></canvas>
</div>
	<script>

    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                label: "User",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [
                  50,61,87,10,23,40,12,50,61,87,10,23,40,12,
                ],
                fill: false,
            }, {
                label: "Product",
                fill: false,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [
                  <?php echo "70";?>,2,98,0,50,0,19,0,2,98,0,30,10,5,
                ],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'Huzion'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    },
                    ticks: {
                        min: 0,
                        max: 100,

                        // forces step size to be 5 units
                        stepSize: 5
                    }
                }]
            }
        }
    };
    //
    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
    };

 //////////////////////////// pie ///////////////////////////////////////




</script>

</td></tr>
</table>
<div class="header">
  <table border="0" style="position:fixed; right: 50px;">
    <tr>
	<td width="10px">
    <img src="image/15.jpg" width="35px" height="40px" style="border-radius: 100% 100% 100% 100%;" /></td>
	<td><a href="#" style="padding:0px; cursor:default;"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></a>
    </td>
	<td>&nbsp;<i class="fa fa-angle-double-right"></i></td>
	<td>
    <a href="program/logout.php" style="padding:12px;">Logout</a>
    </td>
	</tr>
  </table>
    <img src="image/logohuz.png" class="image1" onMouseOver"javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>
</body>

</html>
