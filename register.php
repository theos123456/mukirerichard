
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
</style>
</head>
<body oncontextmenu="return false">
  
<table border="0" class="publication">
<tr>
<td rowspan="" width="30%"> <!---------- Publishes slide part -----------> </td>
<td width="40%">
<form name="register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
<table border="0" width="100%">
<tr bgcolor="#547392"><td style="color: white; font-size:18px; padding:10px;">Publication details</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td style="padding-left:15px;">Product Location:
<select name="location" id="input-style"><option value="empty">Select city</option>
<option>Kigali</option>
<option>Gasabo</option>
<option>Kicukiro</option>
<option>Nyarugenge</option>
<option>Huye</option>
<option>Nyamagabe</option>
<option>Nyaruguru</option>
<option>Nyanza</option>
<option>Gisagara</option>
<option>Ruhango</option>
<option>Muhanga</option>
<option>Kamonyi</option>
<option>Rubavu</option>
<option>Nyabihu</option>
<option>Karongi</option>
<option>Rutsiro</option>
<option>Nyamasheke</option>
<option>Rusizi</option>
<option>Ngororero</option>
<option>Musanze</option>
<option>Burera</option>
<option>Rulindo</option>
<option>gakenke</option>
<option>Nyagatare</option>
<option>gatsibo</option>
<option>kayonza</option>
<option>ngoma</option>
<option>Kirehe</option>
<option>Rwamagana</option>
<option>Bugesera</option></select></td></tr>
<tr><td>
<?php
@session_start();
if(isset($_POST['next']))
{
 if(isset($_POST['location']))
 {
  $_SESSION['location']=$_POST['location'];
 }
 if($_SESSION['location']=='empty')
 {
?>
  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">select one from the list !</td></tr>
<?php
 }
}
?>
&nbsp;
</td></tr>
<tr><td style="padding-left:15px;">Address:<input type="text" name="area" placeholder="may be popular place !" id="input-style"><label style="color:red;">*</label>
</td></tr>
<tr><td>

<?php 

		   if(isset($_POST['next'])){
		    if (!empty($_POST['area']))
		     {
			    $area=$_POST['area'];
				if (preg_match("#[a-zA-Z0-9]#","$area"))
			   {
				$_SESSION['area']=$_POST['area'];
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
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Popular place, please!</td></tr>
	    <?php
			
		   }}
		   ?>
		   &nbsp;
</td></tr>
<tr><td style="padding-left:15px;">Select category:
<select id="input-style" name="category" onChange="categoryChange(this);">
<option value="empty">Select category</option>
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
</select>
</td></tr>
<tr><td>
<?php
if(isset($_POST['next']))
{
 if(isset($_POST['category']))
 {
 $_SESSION['category']=$_POST['category'];
 }
 if($_SESSION['category']=='empty')
 {
?>
  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">select one from the list !</td></tr>
<?php
 }
}
?>
&nbsp;
</td></tr>
<tr><td style="padding-left:15px;">Select Subcategory:
<select name="sub-cat" id="category" style="width:98%;height:40px;box-shadow: 0px 0px 0.5px 0.5px dimgray;"><option value=" ">Select Subcategory</option>
</select>
</td></tr>
<tr><td>
<?php
if(isset($_POST['next']))
{
 if(isset($_POST['sub-cat']))
 {
 $_SESSION['sub-cat']=$_POST['sub-cat'];
 }
 if(empty($_SESSION['sub-cat']))
 {
?>
  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">select one from the list !</td></tr>
<?php
 }
}
?>
&nbsp;</td></tr>
<tr><td style="padding-left:15px;">Product Brand:
<input type="text" name="brand" placeholder="Brand --- for example in computer: Hp 250" id="input-style"><label style="color:red;">*</label>
</td></tr>
<tr><td>
<?php 
		   if(isset($_POST['next'])){
		    if (!empty($_POST['brand']))
		     {
			    $brand=$_POST['brand'];
				if (preg_match("#[a-zA-Z0-9]#","$brand"))
			   {
				$_SESSION['brand']=$_POST['brand'];
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
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Product brand, please!</td></tr>
	    <?php
			
		   }}
		   ?>
		   &nbsp;
</td></tr>
<tr><td style="padding-left:15px;">Product Name:
<input type="text" name="name" placeholder="Name" id="input-style"><label style="color:red;">*</label>
</td></tr>
<tr><td>
<?php 
		   if(isset($_POST['next'])){
		    if (!empty($_POST['name']))
		     {
			    $name=$_POST['name'];
				if (preg_match("#[a-zA-Z0-9]#","$name"))
			   {
				$_SESSION['P_name']=$_POST['name'];
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
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Product name, please!</td></tr>
	    <?php
			
		   }}
		   ?>
		   &nbsp;
</td></tr>
<tr><td style="padding-left:15px;">Description:
<textarea cols="65" name="desc" rows="10" placeholder="Description-enter more details so buyers can learn more about your product!"></textarea><label style="color:red;"></label>
</td></tr>
<tr><td style="padding-left:15px;"><table width="100%" border="0">
<tr><td width="23%" height="90px"><input type="button" style="background-image:url('image/Sed-16-128.png'); border:none; width:55px; height:50px; position:absolute; top:53.2%;" id="one" onClick="javascript:document.getElementById('uploaded_file1').style.visibility='visible'; document.getElementById('one').style.visibility='hidden'; document.getElementById('two').style.visibility='visible';">
<!--<script language="javascript">
function check(form)
{


for (var i = 1; i < 10; i++)
{ 
 if(form.uploaded_file + i.value=="No file selected.")
 {
  document.getElementById('uploaded_file' + i).style.visibility='visible';
  break;
 }
 alert(i)

}
}
</script> -->
<input type="button" id="two" onClick="javascript:document.getElementById('uploaded_file2').style.visibility='visible'; document.getElementById('two').style.visibility='hidden'; document.getElementById('three').style.visibility='visible';" style="background-image:url('image/Sed-16-128.png'); border:none; width:55px; height:50px; position:absolute; top:53.2%; visibility:hidden;">

<input type="button" id="three" onClick="javascript:document.getElementById('uploaded_file3').style.visibility='visible'; document.getElementById('three').style.visibility='hidden'; document.getElementById('four').style.visibility='visible';" style="background-image:url('image/Sed-16-128.png'); border:none; width:55px; height:50px; position:absolute; top:53.2%; visibility:hidden;">

<input type="button" id="four" onClick="javascript:document.getElementById('uploaded_file4').style.visibility='visible'; document.getElementById('four').style.visibility='hidden'; document.getElementById('five').style.visibility='visible';" style="background-image:url('image/Sed-16-128.png'); border:none; width:55px; height:50px; position:absolute; top:53.2%; visibility:hidden;">

<input type="button" id="five" onClick="javascript:document.getElementById('uploaded_file5').style.visibility='visible'; document.getElementById('five').style.visibility='hidden';" style="background-image:url('image/Sed-16-128.png'); border:none; width:55px; height:50px; position:absolute; top:53.2%; visibility:hidden;">
<br>Click to add image</td>
<td width="100%"><?php $i=1; while($i<=5){?><input type="file" name="photo<?php echo $i; ?>" id="uploaded_file<?php echo $i; ?>" multiple="multiple" accept="image/*jpeg| image/*jpg | image/*bmp" autocomplete="off" style="visibility:hidden;" ><?php $i++; } ?></td></tr></table></td></tr>
<tr><td>
<?php
if(isset($_POST['next']))
{
	if(isset($_FILES['photo1']) && $_FILES['photo1']['name']!="")
	{
	$photo_name=$_FILES['photo1']['name'];
	$photo_temp=$_FILES['photo1']['tmp_name'];
	$photo_size=$_FILES['photo1']['size'];
	$folder=$target_dir = 'uploads/';
	$res=$target_dir.$photo_name;
	$number=0;
	while(file_exists($res))
	{
	$number++;
	$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
	$name=str_replace($photo_ext," ",$photo_name);
	$new_name=$name."(".$number.")";
	$new_name_ext=$folder . $new_name . $photo_ext;
	$res=$new_name_ext;
	}
	$result=move_uploaded_file($photo_temp,$res);
	}
	//upload
	//connect server
	//connect database
	$_SESSION['front']=@$res;
	if(!empty($res))
	{
	?>
	<tr><td align="center" style="color:red; padding:1px; font-weight:bold;">please, click browse to search an image!!<?php echo $_SESSION['front']; ?></td></tr>
	<?php
	}
	
	$i=2;
	while($i<=5)
	{
if(isset($_FILES['photo'.$i]) && $_FILES['photo'.$i]['name']!="")
{
$photo_name=$_FILES['photo'.$i]['name'];
$photo_temp=$_FILES['photo'.$i]['tmp_name'];
$photo_size=$_FILES['photo'.$i]['size'];
$target_dir = 'uploads/';
$res=$target_dir.$photo_name;
$number=0;
while(file_exists($res))
{
$number++;
$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
$name=str_replace($photo_ext," ",$photo_name);
$new_name=$name."(".$number.")";
$new_name_ext=$target_dir . $new_name . $photo_ext;
$res=$new_name_ext;
$_SESSION['front'.$i]=@$res;
}
$result=move_uploaded_file($photo_temp,$res);
}
//upload
//connect server
//connect database
$i++;
}
}
?>
</td></tr>
<tr><td align="center"><p style="color:red; font-size:12px;">You can upload more than one file  Press control key(CTRL) when browsing for files.</p></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td style="padding-left:15px;">selling price:

<input type="text" name="S_price" id="input-style">
</td></tr>
<tr><td>
<?php 
		   if(isset($_POST['next'])){
		    if (!empty($_POST['S_price']))
		     {
			    $S_price=$_POST['S_price'];
				if (preg_match("#[0-9]#","$S_price"))
			   {
				$_SESSION['S_price']=$_POST['S_price'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">please, numbers only without currency!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* The amount please!</td></tr>
	    <?php
			
		   }}
		   ?>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td align="center">
<input type="submit" id="input-submit-style" style="width:200px;" name="next" value="next">
</td></tr>  
</table>
</form>
</td>
<td rowspan="" width="30%"><!---------- Publishes slide part -----------> </td>
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
    <a href="publisher-welcome.php" style="padding:12px;">Back</a>
    </td>
	</tr>
  </table>
    <img src="image/logohuz.png" class="image1" onMouseOver"javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>

</body>
</html>
<?php
if(isset($_POST['next']))
{
if(isset($_POST['desc']))
{
$_SESSION['desc']=$_POST['desc'];
}
if(!empty($_SESSION['brand']) and $_SESSION['category']!='empty' and $_SESSION['location']!='empty' and !empty($_SESSION['P_name']) and !empty($_SESSION['area']) and !empty($_SESSION['S_price']) and !empty($_SESSION['front']))
{
echo"<script>location.href='validate_payment.php';</script>";
}
echo"<script>location.href='validate_payment.php';</script>";
}
?>
