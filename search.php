<script type="text/javascript" src="js/category-autoload.js"> </script> <!---Calling to an external Province & District autoload-->
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header-->  
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flags/flags.css">
	<link rel="stylesheet" href="css/flags/flags.min.css">

 <label class="field1" style=" margin-top:0%; color:white; text-align:center;">
  <form action="index.php" method="post">
   <table border="0" align="center" width="80%"><tr> <td><font style="font-weight:bold;">Province :</font></td> <td> <select id="province" onChange="districtChange(this);" name="province" style="min-width: 170px; max-width: 170px;">
						    	
						    <option value="empty">Select Province</option>
						    <option value="SOUTHERN">Southern</option>
						    <option value="EASTERN">Eastern</option>
						    <option value="NOTHERN">Northern</option>
						    <option value="WESTERN">Western</option>
						    <option value="KIGALI">Kigali City</option> </select> </td>
	<td><font style="font-weight:bold;">  District : </font></td> <td> <select id="district" name="district" style="min-width: 170px; max-width: 170px;"><option value="">Select district</option></select><br />
	</td> 
	<td>
	<font style="font-weight:bold;">Category : </font>
	<select name="category" onChange="categoryChange(this);" style="min-width: 170px; max-width: 170px;">
	<option value="empty"> Select category</option>
<option>Computer</option>
 <option>Video & Audio device</option>
  <option>Home & Office supply</option>
   <option>Fashion</option>
    <option>Mobile phone & Tablets</option>
	 <option>Vehicles</option>
	  <option>Real Estate</option>
	   <option>Leisure</option>
	    <option>Jobs & Training</option>
		 <option>Beauty & Make up</option>
	</select> </td>
<td>
	<font style="font-weight:bold;">Sub-category : </font>
	<select name="sub-cat" id="category" style="min-width: 170px; max-width: 170px;"><option value="">Select Subcategory</option>
</select>
	&nbsp;
	<input type="submit" value="Go" name="go1" id="input-submit-style" style="border: none; font-weight:bold; color: white; width: 30px; height: 22px; opacity:0.7; border-radius: 47% 47% 47% 47%; box-shadow:0px 0px 2px 2px green; background-color:#0033FF;">
	</td>
	</tr>
<?php
if(isset($_POST['go1']))
{
@session_start();
 if(isset($_POST['province']))
 {
 $_SESSION['province']=$_POST['province'];
 }
 if(isset($_POST['district']))
 {
 $_SESSION['district']=$_POST['district'];
 }
 if(isset($_POST['category']))
 {
 $_SESSION['category']=$_POST['category'];
 }
 if(isset($_POST['sub-cat']))
 {
 $_SESSION['sub-cat']=$_POST['sub-cat'];
 }
 if($_SESSION['province']=="empty")
 {
?>
  <tr>
  <td colspan="9" style="padding:10px;" align="center">
  <label align="center" style="color:red; padding:1px; font-weight:bold;">Select province please !</label>
  </td>
  </tr>
<?php
 }
 else if(empty($_SESSION['district']))
 {
?>
  <tr>
  <td colspan="9" style="padding:10px;" align="center">
  <label align="center" style="color:red; padding:1px; font-weight:bold;">Select district please !</label>
  </td>
  </tr>
<?php
 }
 else if($_SESSION['category']=="empty")
 {
?>
  <tr>
  <td colspan="9" style="padding:10px;" align="center">
  <label align="center" style="color:red; padding:1px; font-weight:bold;">Select category please !</label>
  </td>
  </tr>
<?php
 }
 else if(empty($_SESSION['sub-cat']))
 {
?>
  <tr>
  <td colspan="9" align="center" style="padding:10px;">
  <label align="center" style="color:red; padding:1px; font-weight:bold;">Select sub category please !</label>
  </td>
  </tr>
<?php
 }
 if(!empty($_SESSION['sub-cat']) and $_SESSION['category']!="empty" and $_SESSION['province']!="empty" and !empty($_SESSION['district']))
 {
  echo"<script>location.href='search_details.php';</script>";
 }
}
?>
</td>
</tr>
	</table>
   </form>
  </label>
  <div id="login-form">
<center>
<form action="program/login.php" method="post">
<table border="0" style="width:98%;" align="center">
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><input type="text" name="user" id="input-style" placeholder="Username" required></td></tr>
<tr><td></td></tr>
<tr><td><input type="password" name="pass" id="input-style" placeholder="Password" required></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td align="center"><input type="submit" name="signin" style="width:30%; height:35px;" value="Sign-in"></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
</form>
</center>
</div>