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
#hidde
{
position:absolute;
top:200px;
left:370px;
}
</style>
</head>
<body>

<table border="0" class="publication">
<tr>

<td width="70%" align="top" >

<center><h4>Set price for publishment</h4></center>

     <center><table border="0"style="border-collapse:no-collapse;width:500px;">
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <tr><th>product content</th><td style="width:300px;"><select id="input-style" name="cat" value="select the content of product" ><option>Select the category</option><option>Video</option><option>audio</option><option>Other</option></select></td><tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><th>Price of publishing</th><td><input type="text"name="price1" id="input-style" placeholder="write the price amount" required></td></tr> 
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2"><center><input type="submit" value="Save"name="save-price" id=input-submit-style style="width:50%;"></center></form></td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
</table></center>  </tr>  


</td>

</tr>
<tr><td colspan="3" style="height:auto;"><?php include_once 'footer.php'; ?></td></tr>
</table>


  <div class="header">
  <table border="0" style="position:fixed; right: 50px;">
    <tr>
	<td width="10px">
    <img src="image/15.jpg" width="35px" height="40px" style="border-radius: 100% 100% 100% 100%;" /></td>
	<td><a href="#" style="padding:0px; cursor:default;">UWINEZA Joel</a>
    </td>
	<td>&nbsp;<i class="fa fa-angle-double-right"></i></td>
	<td>
    <a href="#" style="padding:12px;">Logout</a>
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
<?php

require('program/connection.php');
if(isset($_POST['save-price']))
{
 if(isset($_POST['cat']))
 {
 $cat=$_POST['cat'];
 }
if(isset($_POST['price1']))
 {
 $price=$_POST['price1'];
 }
 $select1="select * from publishing_price where type='$cat'";
 $result1=$conn->query($select1);
 $rows=$result1->num_rows;
 if($rows>0)
 {
  $update1="update publishing_price set amount='$price' where type='$cat'";
  if($conn->query($update1) === TRUE)
  {
   echo "<table id='hidde' width='400px' style='box-shadow:0px 0px 2px 2px black;'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; box-shadow:0px 0px 2px 2px black; font-size:17px;' align='center'><img src='image/like.PNG' width='60px' style='border-radius:100% 100% 100% 100%;'><br>Price Successfull update!</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='admin.php'><img src='image/buttonok.gif' width='60px'></a>
 </td></tr>
 </table>";
return false;
  }
 }
 $insertp="insert into  publishing_price values(null,'$price','$cat')";
 if($conn->query($insertp) === TRUE)
 {
 echo "<table id='hidde' width='400px' style='box-shadow:0px 0px 2px 2px black;'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; box-shadow:0px 0px 2px 2px black; font-size:17px;' align='center'><img src='image/like.PNG' width='60px' style='border-radius:100% 100% 100% 100%;'><br>Price Successfull Setted!</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='admin.php'><img src='image/buttonok.gif' width='60px'></a>
 </td></tr>
 </table>";
return false;
 }
 }

?>