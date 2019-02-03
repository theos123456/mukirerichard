<html>
<head><title>Huzion - User</title>
<script type="text/javascript" src="js/autoload.js"> </script> <!---Calling to an external Province & District autoload--> 
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flags/flags.css">
	<link rel="stylesheet" href="css/flags/flags.min.css">
	<style>
	#hidde
    {
     position:absolute;
     top:200px;
     left:370px;
	 box-shadow: 0px 0px 1px 1px black;
     }
	</style>
    <body>
	<?php
	require('program/connection.php');
@session_start();
$go="select * from users where ssn='".$_SESSION['ssn']."'";
$feed=$conn->query($go);
$resu=$feed->fetch_assoc();
$sel1="select name,prov_id from district where dist_id='".$resu['dist_id']."'";
$res1=$conn->query($sel1);
$fetch=$res1->fetch_assoc(); 
$selprov="select name from province where prov_id='".$fetch['prov_id']."'";
$resultp=$conn->query($selprov);
$fet=$resultp->fetch_assoc();
	?>
    <div class="header">
  <table border="0" style="position:absolute; right: 50px;">
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
  <form action="change-details.php" method="post">
    <table border="0" width="100%" style="position:relative;top:100px;" >
    <tr><td bgcolor="#547392" style="color: white; height: 30px; width: 50%;">New publisher | Account creation</td><td bgcolor="#547392" style="color: white; height: 30px; width: 50%;">Your address | Account creation</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td bgcolor="white" style="padding-left:10px;">Firstname: <br><input type="text" name="name1" id="input-style" value="<?php echo $resu['fname'];?>"><label style="color:red;">*</label></td><td bgcolor="white" style="padding-left:20px;">National Identity Number: <input type="text" name="nid" id="input-style"  value="<?php echo $resu['national_id'];?>"><label style="color:red;">*</label></td></tr>
    <tr><td colspan="1" align="center">
	<?php 
		   if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</label>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">* Your first name, please!</label>
	    <?php
			
		   }}
		   ?>
	</td>
	<td align="center">
	        <?php 
			if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">Invalid national identity!!</label>
			   <?php 
			   }
			  
		 }
		 else
		 {
			 ?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">* Your national identity, please!!</label>
			   <?php
			   }}
		   ?>
	</td>
	</tr>
    <tr><td bgcolor="white" style="padding-left:10px;">Lastname: <br><input type="text" name="name2" id="input-style"  value="<?php echo $resu['lname'];?>"><label style="color:red;">*</label></td><td bgcolor="white" style="padding-left:20px;">Country: <input type="text" name="country" id="input-style" value="<?php echo $resu['country'];?>" /><label style="color:red;">*</label></td></tr>
    <tr><td colspan="1" align="center">
	<?php 
		   if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</label>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">* Your lastname, please!</label>
	    <?php
			
		   }}
		   ?>
	</td>
	<td align="center">
	<?php 
		   if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</label>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">* Enter country name, please!</label>
	    <?php
			
		   }}
		   ?>
	</td>
	</tr>
    <tr><td bgcolor="white" style="padding-left:10px;">E-mail: <br><input type="text" name="email" id="input-style" value="<?php echo $resu['email'];?>"><label style="color:red;">*</label>	
	</td><td bgcolor="white" style="padding-left:20px;">Province/ state: <input type="text" name="province" id="input-style" value="<?php echo $fet['name'];?>"/><label style="color:red;">*</label>	
	</td></tr>
    <tr><td colspan="1" align="center">
	<?php 
    if(isset($_POST['email']))
    {
     $email = $_POST["email"];
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    ?>
    <label align="center" style="color:red; padding:1px; font-weight:bold;">email should contain @ and . character</label>
    <?php
     }
     else{$email1=$_POST["email"];}
    }
    ?>
	</td>
	<td align="center">
	<?php 
		   if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</label>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">* Enter province name, please!</label>
	    <?php
			
		   }}
		   ?>
	</td>
	</tr>
    <tr><td bgcolor="white" style="padding-left:10px;">telephone: <input type="text" name="phone" id="input-style" value="<?php echo $resu['telephone'];?>"/><label style="color:red;">*</label>	
	</td><td bgcolor="white" style="padding-left:20px;">District: <input type="text" name="district" id="input-style" value="<?php echo $fetch['name'];?>"/><label style="color:red;">*</label>	
	</td></tr>
    <tr><td colspan="1" align="center">
	<?php 
			if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">Invalid phone number!!</label>
			   <?php 
			   }
			  
		 }
		 else
		 {
			 ?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">Your phone number, please!!</label>
			   <?php
			   }}
		   ?>
	</td>
	<td align="center">
	<?php 
		   if(isset($_POST['update'])){
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
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</label>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">* Enter district name, please!</label>
	    <?php
			
		   }}
		   ?>
	</td>
	</tr>
    <tr><td bgcolor="white" style="padding:10px;"> <input type="checkbox" name="status" value="Whatsapp" onClick="javascript:document.getElementById('wp').style.visibility='visible';" style="border:3px solid #FF0000;">Work with Whatsapp <label class="fa fa-whatsapp" id="wp"></label><input type='hidden' value='<?php echo date('D-d-M-Y');?>' name='date'></td><td bgcolor="white" style="padding-left:20px;">Other address: <input type="text" name="other" id="input-style" value="<?php echo $resu['address'];?>" /><label style="color:red;">*</label>	
	</td></tr>
    </td>   
	<tr><td colspan="1"></td><td align="center">
	<?php 
		   if(isset($_POST['update'])){
		    if (!empty($_POST['other']))
		    {
			    $other=$_POST['other'];
				if (preg_match("#[a-zA-Z0-9]#","$other"))
			   {
				$other1=$_POST['other'];
			   }
			   else
			   {
			   ?>
				  <label align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</label>
			   <?php	  
			   }
		    }
			else
			{
			 ?>
				<label align="center" style="color:red; padding:1px; font-weight:bold;"> *May be popular place please</label>
			 <?php
			}			   
		   }
		   ?>
	</td></tr>
    <tr><td colspan="2" style="padding:3px;">&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><input type="submit" name="update" style="background-color:green; border:none; color: white; font-weight:bold;" value="Update" id="input-submit-style"></td></tr> 
    </tr></table>
	</form>
	</body></html>
	<?php 


if(isset($_POST['update']))
{
$date=$_POST['date'];
@$status=$_POST['status'];
if(!empty($firstname1) and !empty($lastname1) and !empty($email1) and !empty($phone1) and !empty($nid1) and !empty($country1) and !empty($province1) and !empty($district1) and !empty($other1))
{
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
@$sql="UPDATE users set fname='$firstname1', lname='$lastname1', email='$email1', telephone='$phone1', work_with='$status', national_id='$nid1', country='$country1', address='$other1', dist_id='".$fetch2['dist_id']."' where ssn='".$_SESSION['ssn']."'";
if ($conn->query($sql)===TRUE) {
echo "<table id='hidde'>
 <tr><td style='background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;'><b>Information</b></td></tr>
 <tr><td style='padding:34px; background-color:gray; color:black; box-shadow:0px 0px 2px 2px gray; opacity:0.9; font-weight:900; font-size:17px;'><img src='image/notification.png' width='60px'> Your information has been update!</td></tr>
 <tr><td align='right' style='box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;'>
 <a href='publisher-welcome.php'><img src='image/buttonok.gif' width='60px'></a>
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

?>
<!-- Popup Div Ends Here -->