<html>
<head><title>Huzion - Sign up</title>
<script type="text/javascript" src="js/autoload.js"> </script> <!---Calling to an external Province & District autoload--> 
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flags/flags.css">
	<link rel="stylesheet" href="css/flags/flags.min.css">
<style>
#wp{
color:#009933;
font-weight:bold;
visibility:hidden;
}
#hidde
{
position:absolute;
top:400px;
left:640px;
width:30%;
color:white;
box-shadow:0px 0px 2px 2px black;
background-color:#000000;
height:20%;
opacity:0.8;
}
</style>
<body>
  
  <div class="div2"><img src="image/index.jpeg" class="image2"><img class="shop" src="image/shop.png" height="20px"><h2 class="text1">Best online store for you !!</h2>
</div>

<table border="0" class="content-holder">
<tr>
<td width="350px" valign="top"> &nbsp; <!---------- Publishes slide part -----------> </td>
<td valign="top">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
<center>
<table width="100%" style="box-shadow:0px 0px 7px 7px #CCCCCC;">
<tr align="left"><td bgcolor="#547392" style="color: white; height: 30px;">New publisher | Account creation</td></tr>
<tr><td bgcolor="white">Firstname: <br><input type="text" name="name1" id="input-style" placeholder="Your name"><label style="color:red;">*</label></td><tr>

<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['name1']))
		     {
			    $first_name=$_POST['name1'];
				if (preg_match("#[a-zA-Z0-9]#","$first_name"))
			   {
				$firstname1=$_POST['name1'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your first name, please!</td></tr>
	    <?php
			
		   }}
		   ?>

<tr><td bgcolor="white">Lastname: <br><input type="text" name="name2" id="input-style" placeholder="Your lastname"><label style="color:red;">*</label></td><tr>
<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['name2']))
		     {
			    $last_name=$_POST['name2'];
				if (preg_match("#[a-zA-Z0-9]#","$last_name"))
			   {
				  $lastname1=$_POST['name2'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your lastname, please!</td></tr>
	    <?php
			
		   }}
		   ?>

<tr><td bgcolor="white">E-mail: <br>
<input type="text" name="email" id="input-style" placeholder="Your email"><label style="color:red;">*</label></td><tr>
<?php 
if(isset($_POST['email']))
{
$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
?>
    <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">email should contain @ and . character</td></tr>
<?php
}
else{$email1=$_POST["email"];}
}
?>
<tr><td bgcolor="white">telephone: <input type="text" name="phone" id="input-style" placeholder="your phone number" maxlength="10"/><label style="color:red;">*</label></td><tr>
<?php 
			if(isset($_POST['signup'])){
		    if (!empty($_POST['phone']))
		     {
			    $phone=$_POST['phone'];
			    if (preg_match("#^0[7-8][0-9]{8}$#","$phone"))
			   {
			       $phone1=$_POST['phone'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">Invalid phone number!!</td></tr>
			   <?php 
			   }
			  
		 }
		 else
		 {
			 ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">Your phone number, please!!</td></tr>
			   <?php
			   }}
		   ?>
<tr><td bgcolor="white" style="padding:10px;"> <input type="checkbox" name="status" value="Whatsapp" onClick="javascript:document.getElementById('wp').style.visibility='visible';" style="border:3px solid #FF0000;">Work with Whatsapp <label class="fa fa-whatsapp" id="wp"></label><input type='hidden' value='<?php echo date('D-d-M-Y');?>' name='date'></td><tr>
<tr align="left"><td bgcolor="#547392" style="color: white; height: 30px;">Your address | Account creation</td></tr>
<tr><td bgcolor="white">National Identity Number: <input type="text" name="nid" id="input-style" placeholder="National identity number" maxlength="16"><label style="color:red;">*</label></td><tr>

<?php 
			if(isset($_POST['signup'])){
		    if (!empty($_POST['nid']))
		     {
			    $nid=$_POST['nid'];
			    if (preg_match("#^1[0-9]{15}$#","$nid"))
			   {
			       $nid1=$_POST['nid'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">Invalid national identity!!</td></tr>
			   <?php 
			   }
			  
		 }
		 else
		 {
			 ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your national identity, please!!</td></tr>
			   <?php
			   }}
		   ?>

<tr><td bgcolor="white">Country: <input type="text" name="country" id="input-style" placeholder="Your country" /><label style="color:red;">*</label></td><tr>
<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['country']))
		     {
			    $country=$_POST['country'];
				if (preg_match("#[a-zA-Z]#","$country"))
			   {
				$country1=$_POST['country'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Enter country name, please!</td></tr>
	    <?php
			
		   }}
		   ?>

<tr><td bgcolor="white">Province/ state: <input type="text" name="province" id="input-style" placeholder="your province" /><label style="color:red;">*</label></td><tr>
<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['province']))
		     {
			    $province=$_POST['province'];
				if (preg_match("#[a-zA-Z]#","$province"))
			   {
				$province1=$_POST['province'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Enter province name, please!</td></tr>
	    <?php
			
		   }}
		   ?>

<tr><td bgcolor="white">District: <input type="text" name="district" id="input-style" placeholder="your district" /><label style="color:red;">*</label></td><tr>
<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['district']))
		     {
			    $district=$_POST['district'];
				if (preg_match("#[a-zA-Z]#","$district"))
			   {
				$district1=$_POST['district'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Enter district name, please!</td></tr>
	    <?php
			
		   }}
		   ?>

<tr><td bgcolor="white">Other address: <input type="text" name="other" id="input-style" placeholder="may be popular place" /><label style="color:red;">*</label></td><tr>
<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['other']))
		     {
			    $other=$_POST['other'];
				if (preg_match("#[a-zA-Z]#","$other"))
			   {
				$other1=$_POST['other'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		   }
		   ?>
<tr align="left"><td bgcolor="#547392" style="color: white; height: 30px;">Your Credidential| Account creation</td></tr>
<tr><td bgcolor="white">Username: <input type="text" name="username" id="input-style" placeholder="Your username" /><label style="color:red;">*</label></td><tr>
<?php 
		   if(isset($_POST['signup'])){
		    if (!empty($_POST['username']))
		     {
			    $user=$_POST['username'];
				if (preg_match("#[a-zA-Z]#","$user"))
			   {
				$user1=$_POST['username'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		   }
		   ?>
<tr><td bgcolor="white">Password: <input type="password" name="confirm1" id="input-style" placeholder="Your password"><label style="color:red;">*</label></td><tr>
<tr><td bgcolor="white">Confirm Password: <input type="password" name="confirm" id="input-style" placeholder="confirm your password"><label style="color:red;">*</label></td><tr>
<tr><td bgcolor="white" align="left" style="font-size:12px;">If you already have account, please go on <a href="#" style="color:#0073e6;" onMouseOver="javascript:document.getElementById('login-form').style.visibility='visible';">Login page</a> </td><tr>
<tr><td bgcolor="white" align="center"><input type="submit" name="signup" style="background-color:green; border:none; color: white; font-weight:bold;" value="Create" id="input-submit-style"></td><tr>
</table></form>

</td>
</tr>
<tr><td colspan="2" style="height:auto;"><?php include_once 'footer.php'; ?></td></tr>
</table>


  <div class="header">
    <a href="About.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">About us</a>
    <a href="contact.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">contact us</a>
    <a href="sign-up.php" style="color: red;" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">Sign up</a>
    <a href="index.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">Home</a>
    <img src="image/logohuz.png" class="image1" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>

<?php 


if(isset($_POST['signup']))
{
			  $password1=$_POST['confirm1'];
			  $cpassword=$_POST['confirm'];
			  $date=$_POST['date'];
			  @$status=$_POST['status'];
			  
require('program/connection.php');
if(!empty($password1) and !empty($cpassword) and !empty($firstname1) and !empty($lastname1) and !empty($email1) and !empty($phone1) and !empty($nid1) and !empty($country1) and !empty($province1) and !empty($district1))
{
if($password1!=$cpassword)
{
echo "<table id='hidde'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Warning</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; font-size:17px;'><img src='image/notification.png' width='60px'> Password and username mismatch!</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='sign-up.php'><img src='image/buttonok.gif' width='60px'></a>
 </td></tr>
 </table>";
return false;
}

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

$selprov="select prov_id from province where name='$province1'";
$result1=$conn->query($selprov);
if($result1->num_rows<1)
{
$insprov="insert into province(name) values('$province1')";
$conn->query($insprov);
}
$selprov="select prov_id from province where name='$province1'";
$result2=$conn->query($selprov);
$fetch1=$result2->fetch_assoc();
$seldist="select dist_id from district where name='$district1' and prov_id='".$fetch1['prov_id']."'";
$countin2=$conn->query($seldist);
if($countin2->num_rows<1)
{
$insdist="insert into district(name,prov_id) values('$district1','".$fetch1['prov_id']."')";
$insd=$conn->query($insdist);
}
$seldist="select dist_id from district where name='$district1' and prov_id='".$fetch1['prov_id']."'";
$disel=$conn->query($seldist);
$fetch2=$disel->fetch_assoc();

$sql="INSERT INTO users(ssn, fname, lname, email, telephone, work_with, title, national_id, country, address, dist_id) VALUES('$num', '$firstname1', '$lastname1', '$email1', '$phone1', '$status', 'Publisher', '$nid1', '$country1', '$other1', '".$fetch2['dist_id']."')";
if ($conn->query($sql)===TRUE) {
$inscred="Insert into security(id, username, password, ssn) values(null, '$user1', '$cpassword', '$num')";
if ($conn->query($inscred)===TRUE) {
echo "<table id='hidde'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; font-size:17px;'><img src='image/notification.png' width='60px'> Account has been created!</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='sign-up.php'><img src='image/buttonok.gif' width='60px'></a>
 </td></tr>
 </table>";
return false;
}
}
else {
    echo "<table id='hidde'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; opacity:0.9; font-weight:900; font-size:17px;'><img src='image/notification.png' width='60px'> Account has not been created! Try again.</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='sign-up.php'><img src='image/buttonretry.gif' width='60px'></a>
 </td></tr>
 </table>";
}
}

}
?>
<!-- Popup Div Ends Here -->






</center>
</body>
</html>
