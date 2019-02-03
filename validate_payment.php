<?php
session_start();
?>
<html>
<head><title>Huzion - Product Registration</title>
<script type="text/javascript" src="js/category-autoload.js"> </script> <!---Calling to an external Province & District autoload-->
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header-->  
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
top: 70px;
min-height:900px;
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
<?php 
session_start(); 
?>
<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<table border="0" style="margin-top:100px;" width="1100px">
<tr bgcolor="#547392">
<td style="color: white; font-size:18px; padding:10px;" colspan="2">Publisher details</td>
<td style="color: white; font-size:18px; padding:10px;" colspan="2">Published item</td>
</tr>
<tr><td colspan="4">&nbsp;</td></tr>
<tr>
<td style="">Firstname:<input type="text" name="" style="background-color:lightblue; border:none;" value="<?php echo $_SESSION['fname']; ?>" readonly="" id="input-style" /></td> 
<td style="padding-left:15px;">Lastname:<input type="text" style="background-color:lightblue; border:none;" name="" value="<?php echo $_SESSION['lname']; ?>" id="input-style" /></td>
<td style="padding-left:15px;" rowspan="3" colspan="2"><img src="<?php echo $_SESSION['front']; ?>" style="width:250px; height:190px; box-shadow:0px 0px 2px 2px gray;"></td>
</tr>
<tr><td colspan="4">&nbsp;</td></tr>
<tr>
<td style="width:50%;">E-mail address: <input type="text" name="" style="background-color:lightblue; border:none;" value="<?php echo $_SESSION['email']; ?>" id="input-style" readonly="" /></td>
<td style="padding-left:15px; width:50%; color:">Phone number:<input type="text" name="" value="<?php echo $_SESSION['telephone']; ?>" id="input-style" style=" <?php if($_SESSION['work_with']=="Whatsapp"){?> background-image:url('image/whatsupp.png'); background-repeat:no-repeat; background-position:right; border: none;<?php } ?>" /></td>
</tr>

<tr><td colspan="2" rowspan="1">&nbsp;</td>
<td style="padding-left:15px;">
<?php $i=2; while($i<=5){if(!empty($_SESSION['front'.$i])){?><img src="<?php echo $_SESSION['front'.$i]; ?>" style="box-shadow:0px 0px 2px 2px gray;" width="26%" height="70px"><?php } $i++;}?>
</td><td rowspan="3"></td></tr>
<tr><td colspan="2" rowspan="3"><input type="checkbox" name="accept" required> Do you accept <a href="#">terms and policies</a></td>
<td style="padding-left:15px; color:blue; font-family:Andalus; font-weight:bold; font-size:17px;"><?php echo $_SESSION['P_name'] ?></td></tr>
<tr><td style="padding-left:15px; color:blue; font-family:Andalus; font-weight:bold; font-size:17px;"><?php echo $_SESSION['brand'] ?></td></tr>
<tr><td style="padding-left:15px; color:blue; font-family:Andalus; font-weight:bold; font-size:17px;"><?php echo $_SESSION['S_price']?></td></tr>
<tr><td align="right" colspan="2" style="padding-left:15px; color:blue; font-family:Andalus; font-weight:bold; font-size:17px;"><input type="submit" value="Publish" name="publish" id="input-submit-style" style="width:150px;"/></td></tr>
</table>
</form>
</center>

  <div class="header">
    <table border="0" style="position:fixed; right: 50px;">
    <tr>
	<td width="10px">
    <img src="image/15.jpg" width="35px" height="40px" style="border-radius: 100% 100% 100% 100%;" /></td>
	<td><a href="#" style="padding:0px; cursor:default;"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></a>
    </td>
	<td>&nbsp;<i class="fa fa-angle-double-right"></i></td>
	<td>
    <a href="program/logout.php" style="padding:12px;">Back</a>
    </td>
	</tr>
    </table>
    <img src="image/logohuz.png" class="image1" onMouseOver"javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>
</body>
</html>
<?php

if(isset($_POST['publish']))
{
 function code($length = 4)
 {
  $validCharacters = "0123456789";
  $validCharNumber = strlen($validCharacters);
 
  $result = "";
 
  for ($i = 0; $i < $length; $i++)
  {
   $index = mt_rand(0, $validCharNumber - 1);
   $result .= $validCharacters[$index];
  }
 
  return $result;
 }
 $num=code();
 $date=date('d-m-Y');
 require('program/connection.php');
 $sel1="select dist_id from district where name='".$_SESSION['location']."'";
 $res1=$conn->query($sel1);
 $fetch=$res1->fetch_assoc();
 $_SESSION['pub']=$num;
 $ins1="insert into publication values('$num','".$_SESSION['P_name']."','".$_SESSION['brand']."','".$_SESSION['category']."','".$_SESSION['sub-cat']."','".$_SESSION['S_price']."','".$_SESSION['area']."','".$_SESSION['desc']."','$date','".$_SESSION['ssn']."','".$fetch['dist_id']."')";
 if($conn->query($ins1) === TRUE)
 {
 $ins2="insert into product_images values(null,'".$_SESSION['front']."','".$_SESSION['pub']."')";
 if($conn->query($ins2) === TRUE)
 {
 $i=2; 
 while($i<=5)
 {
 if(!empty($_SESSION['front'.$i]))
 {
  $ins3="insert into product_images values(null,'".$_SESSION['front'.$i]."','".$_SESSION['pub']."')";
  $conn->query($ins3);
 }
 $i++;
 }
 echo "<table id='hidde' width='400px' style='box-shadow:0px 0px 2px 2px black;'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; box-shadow:0px 0px 2px 2px black; font-size:17px;' align='center'><img src='image/like.PNG' width='60px' style='border-radius:100% 100% 100% 100%;'><br>Successfull published!</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='publisher-welcome.php'><img src='image/buttonok.gif' width='60px'></a>
 </td></tr>
 </table>";
return false;
 }
 }
}

?>