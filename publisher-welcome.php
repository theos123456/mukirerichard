<?php

?>
<html>
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<head><title>Huzion - User Welcome</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/charts/Chart.bundle.js"></script>
<script src="js/charts/utils.js"></script>

<?php
@session_start();
require('program/connection.php');
$sel="select * from publication where publisher='".$_SESSION['ssn']."'";
$result=$conn->query($sel);
$value1=$result->num_rows;
?>

<body>

<table border="1" class="welcome-content">
<tr>
<td width="250px" valign="top">
<table border="0" width="100%" align="center">
<tr><td bgcolor="black" style="color: white; padding: 12px;">Profile</td></tr>
<tr><td></td></tr><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id='contactusform' method="post" >
<tr><td style="color: white; padding: 0px;"><input type="submit" name="changep" id="input-style" style="opacity: 0.9; background-color:#99CCFF; border: none; font-weight: bold; width: 100%; cursor:pointer;" value="Change password"></td></tr>
<tr><td></td></tr>
<tr><td style="color: white; padding: 0px;"><input type="submit" name="published" id="input-style" style="opacity: 0.9; background-color:#99CCFF; border: none; font-weight: bold; width: 100%;  cursor:pointer;" value="Published (<?php echo $value1; ?>)"></td></tr>
<tr><td></td></tr>
<tr><td style="color: white; padding: 0px;"><input type="submit" name="changed" id="input-style" style="opacity: 0.9; background-color:#99CCFF; border: none; font-weight: bold; width: 100%;  cursor:pointer;" value="change your details"></td></tr>
<tr><td></td></tr>
<tr><td style="color: white; padding: 0px;"><input type="submit" name="pub" id="input-style" style="opacity: 0.9; background-color:#99CCFF; border:1.5px solid gray; font-weight: bold; width: 100%;cursor:pointer;" value="Publish">
</td></tr>
<tr><td></td></tr>
</table>
</td>
<td>
<center>
<?php 
if(isset($_POST['pub'])){
echo"<script>location.href='register.php';</script>";
}
?>
<?php 
if(isset($_POST['upload'])){
echo"<script>location.href='music-upload.php';</script>";
}
?>
<?php 
if(isset($_POST['changep'])){
echo"<script>location.href='change-password.php';</script>";
}
?>
<?php 
if(isset($_POST['changed'])){
echo"<script>location.href='change-details.php';</script>";
}
?>
<?php 
if(isset($_POST['published'])){
echo"<script>location.href='published.php';</script>";
}
?>
<h3>Welcome Mr/ Miss <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>, look to your Dashboard activities</h3>

<canvas id="canvas"></canvas>


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
