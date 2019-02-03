<html>
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<head><title>change your password</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/charts/Chart.bundle.js"></script>
<script src="js/charts/utils.js"></script>
<body>
<?php
@session_start();
?>
<div class="header">
  <table border="0" style="position:fixed; right: 50px;">
    <tr>
	<td width="10px">
    <img src="image/15.jpg" width="35px" height="40px" style="border-radius: 100% 100% 100% 100%;" /></td>
	<td><a href="#" style="padding:0px; cursor:default;"> <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></a>
    </td>
	<td>&nbsp;<i class="fa fa-angle-double-right"></i></td>
	<td>
    <a href="publisher-welcome.php" style="padding:12px;">Back</a>
    </td>
	</tr>
  </table>
    <img src="image/logohuz.png" class="image1" onMouseOver"javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <table width="100%" style="box-shadow:0px 0px 7px 7px #CCCCCC;position:relative;top:100px;left:300px; width:900px;">
  <tr align="left"><td bgcolor="#547392" style="color: white; height: 30px;">Modify your Password</td></tr>
  <tr><td>&nbsp;</td></tr>
<tr><td bgcolor="white">Old password: <br><input type="text" name="old" id="input-style" ><label style="color:red;">*</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td bgcolor="white">New password: <br><input type="text" name="new" id="input-style" ><label style="color:red;">*</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td bgcolor="white">Retype new password: <br><input type="text" name="new1" id="input-style" ><label style="color:red;">*</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td bgcolor="white" align="center"><input type="submit" name="update" style="background-color:green; border:none; color: white; font-weight:bold;" value="Update" id="input-submit-style"></td></tr>
<tr><td>&nbsp;</td></tr>
</table></form>
  </body></html>
  <?php
  if(isset($_POST['update'])){
  if(isset($_POST['old'])){
  $old=$_POST['old'];
  }
  if(isset($_POST['new'])){
  $new=$_POST['new'];
  }
  if(isset($_POST['new1'])){
  $new1=$_POST['new1'];
  }
  if($_SESSION['password']!=$old){
  echo "<table id='hidde' width='400px' style='box-shadow:0px 0px 2px 2px black;'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Warning</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; box-shadow:0px 0px 2px 2px black; font-size:17px;' align='center'><img src='image/notification.PNG' width='60px' style='border-radius:100% 100% 100% 100%;'><br>The Old password you type are incorrect,please! try again</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='change-password.php'><button style='width:25%; opacity:0.5; height:35px; box-shadow: 0px 0px 1px 1px green;'>Retry</button></a>
 </td></tr>
 </table>";
  }
  else if($new!=$new1){
  echo "<table id='hidde' width='400px' style='box-shadow:0px 0px 2px 2px black;'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Warning</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; box-shadow:0px 0px 2px 2px black; font-size:17px;' align='center'><img src='image/notification.png' width='60px' style='border-radius:100% 100% 100% 100%;'><br>The confirm password you type are incorrect,please! try again</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='change-password.php'><button style='width:25%; opacity:0.5; height:35px; box-shadow: 0px 0px 1px 1px green;'>Retry</button></a>
 </td></tr>
 </table>";
  }
  else{
  require('program/connection.php');
  $sql = "UPDATE security SET password='$new' WHERE ssn='".$_SESSION['ssn']."'";
if ($conn->query($sql) === TRUE) {

    echo "<table id='hidde' width='400px' style='box-shadow:0px 0px 2px 2px black;'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; box-shadow:0px 0px 2px 2px black; font-size:17px;' align='center'><img src='image/like.PNG' width='60px' style='border-radius:100% 100% 100% 100%;'><br>The password change successfully</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='change-password.php'><button style='width:25%; opacity:0.5; height:35px; box-shadow: 0px 0px 1px 1px green;'>Retry</button></a>
 </td></tr>
 </table>";
}
}
$conn->close();
}
?>
