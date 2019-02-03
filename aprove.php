<html>
<head><title>Huzion - musics</title>
<script type="text/javascript" src="js/category-autoload.js"> </script> <!---Calling to an external Province & District autoload--> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flags/flags.css">
	<link rel="stylesheet" href="css/flags/flags.min.css">
<style>
.publication
{
position: absolute;
border: none;
top: 55px;
width: 1338px;
}
.button
{
    background:#547392;
    width:100px;
    height:50px;
    border:2px red;
    border-radius:15px 15px 0px  yellow;
    font-size:20px;
    font-style:oblique;
    font-family:Cambria;
    box-shaddow:10px 10px red;
    color:white;
}

</style>
</head>
<body>

<table border="0" class="publication">
<tr>

<td width="70%" valign="top" >
<center><u><i><h4>product above seven days</h4></i></u></center>

     <table border="0"style="border-collapse:no-collapse;" align="center" cellpadding="10px" width="80%">
<tr bgcolor="#99CCCC"><th> names</th><th>Email</th><th>Phone</th><th>Product</th><th>approve</th><th>Delete</th></tr>
<?php
require('program/connection.php');
@session_start();
$date = strtotime(date('Y-m-d') . ' -1 week');
$date2=date('d-m-Y', $date);
$sel1="select * from publication as pub, users as users where pub.pub_date='$date2' and pub.publisher=users.ssn";
 $result=$conn->query($sel1);
 while($fet=$result->fetch_assoc())
 {
  $sel2="select image from product_images where pub_id='".$fet['pub_id']."'";
  $res1=$conn->query($sel2);
  $fet2=$res1->fetch_assoc();
?>
<tr><td><?php echo $fet['fname'];?>&nbsp;<?php echo $fet['lname']." ".$fet['pub_id']; ?></td><td><?php echo $fet['email'];?></td><td><?php echo $fet['telephone'];?></td><td><img src="<?php echo $fet2['image'];?>"style="width:100px;height:80px;></td><td><input type="button"name="pub"value="aprove" class="button"></td><td><input type="button"name="pub"value="aprove" class="button"></td><td><input type="button"name="delet"value="delete"class="button"></td></tr>
<?php };?>

</table> 
</td>
</tr>
<tr><td colspan="3" style="height:auto;"><?php include_once 'footer.php'; ?></td></tr>
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
    <a href="admin.php" style="padding:12px;">Back</a>
    </td>
	</tr>
    </div>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
</center>
</div>
</body>
</html>
