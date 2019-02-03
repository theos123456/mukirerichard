<html>
<head><title>Huzion - Category name here</title>
<script type="text/javascript" src="js/autoload.js"> </script> <!---Calling to an external Province & District autoload--> 
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
top: 55px;
width: 1338px;
}


</style>
</head>
<body>
  

<table border="0" class="publication">
<tr>
<td rowspan="" width="200px" valign="top"> <!---------- Publishes slide part -----------> 
<table class="slide" border="0" >
<tr><td>
<div class="sidenav">
<?php
@session_start();
require('program/connection.php');
if(isset($_GET['id']))
{
$categoryid=$_GET['id'];
}
?>
<h4>Categories</h4>
  <button class="dropdown-btn">Computer 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Laptops";?>">Laptops</a>
    <a href="category-details.php?id=<?php echo"Desktops";?>">Desktops</a>
    <a href="category-details.php?id=<?php echo"Softwares";?>">Softwares</a>
	<a href="category-details.php?id=<?php echo"Networking";?>">Networking</a>
    <a href="category-details.php?id=<?php echo"Computer spare parts";?>">Spare parts</a>
    <a href="category-details.php?id=<?php echo"Computer Accessories";?>">Accessories</a>
  </div>
  <button class="dropdown-btn">Video & Audio device
    <i class="fa fa-caret-down"></i></a>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Digital cameras";?>">Digital cameras</a>
    <a href="category-details.php?id=<?php echo"Recorder & Microphones";?>">Recorder & Microphones</a>
    <a href="category-details.php?id=<?php echo"Head phone & speaker";?>">Headphone & speaker</a>
	<a href="category-details.php?id=<?php echo"TV & Video";?>">TV & Video</a>
    <a href="category-details.php?id=<?php echo"Video Games & Consoles";?>">Video Games & Consoles</a>
    <a href="category-details.php?id=<?php echo"Cameras Accessories";?>"> Cameras Accessories</a>
  </div>
  <button class="dropdown-btn">Home & Office supply 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Furniture";?>">Furniture</a>
    <a href="category-details.php?id=<?php echo"Solar system";?>">Solar system</a>
    <a href="category-details.php?id=<?php echo"Printer & Scanner";?>">Printer & Scanner</a>
	<a href="category-details.php?id=<?php echo"Sound & Display system";?>">Sound & Display system</a>
    <a href="category-details.php?id=<?php echo"Home Appliances";?>">Home Appliances</a>
	<a href="category-details.php?id=<?php echo"Security & Accessibility";?>">Security & Accessibility</a>
  </div>
   <button class="dropdown-btn">Fashion
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Men Styles";?>">Men Styles</a>
    <a href="category-details.php?id=<?php echo"Women Styles";?>">Women Styles</a>
    <a href="category-details.php?id=<?php echo"Bags";?>">Bags</a>
	<a href="category-details.php?id=<?php echo"Watches";?>">Watches</a>
  </div>
   <button class="dropdown-btn">Mobile phone & Tablets 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Mobile phones";?>">Mobile phones</a>
    <a href="category-details.php?id=<?php echo"Tablets";?>">Tablets</a>
    <a href="category-details.php?id=<?php echo"Accessories";?>">Accessories</a>
  </div>
   <button class="dropdown-btn">Automobile
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Spare parts & accessories";?>">Spare parts & accessories</a>
    <a href="category-details.php?id=<?php echo"Rental";?>">Rental</a>
    <a href="category-details.php?id=<?php echo"Cars";?>">Cars</a>
	<a href="category-details.php?id=<?php echo"Bikes";?>">Bikes</a>
    <a href="category-details.php?id=<?php echo"Boats & Sailing";?>">Boats & Sailing</a>
	<a href="category-details.php?id=<?php echo"Heavy Duty Vehicles";?>">Heavy Duty Vehicles</a>
  </div>
  <button class="dropdown-btn">Real Estate 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Apartment for sale";?>">Apartment for sale</a>
<a href="category-details.php?id=<?php echo"Apartment for rent";?>">Apartment for rent</a>
<a href="category-details.php?id=<?php echo"Furnished apartment";?>">Furnished apartment</a>
<a href="category-details.php?id=<?php echo"Studio & Room for rent";?>">Studio & Room for rent</a>                               
<a href="category-details.php?id=<?php echo"House for sale";?>">Houses for sale</a>
<a href="category-details.php?id=<?php echo"House for rent";?>">Houses for rent</a>
<a href="category-details.php?id=<?php echo"Land & plots";?>">Land & Plots</a>
<a href="category-details.php?id=<?php echo"Offices & Stores";?>">Offices & Stores</a>
<a href="category-details.php?id=<?php echo"Industrial Building";?>">Industrial Building</a>
  </div>
  <button class="dropdown-btn">Leisure
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Sport & Fitness";?>">Sport & Fitness</a>
<a href="category-details.php?id=<?php echo"Travel & Tourism";?>">Travel & Tourism</a>
<a href="category-details.php?id=<?php echo"Musical Instruments";?>">Musical Instruments</a>
<a href="category-details.php?id=<?php echo"Art & Craft";?>">Art & Craft</a>                               
<a href="category-details.php?id=<?php echo"Books, Films, Toys";?>">Books, Films, Toys Events</a>
  </div>
  <button class="dropdown-btn">Jobs & Training
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="category-details.php?id=<?php echo"Training & Courses";?>">Training & Courses</a>
<a href="category-details.php?id=<?php echo"Job Offers";?>">Job Offers</a>
  </div>

<button class="dropdown-btn">Beauty & Make up<i class="fa fa-caret-down"></i>
  </button>
  </button>
  <div class="dropdown-container">
<a href="category-details.php?id=<?php echo"Pro Massage";?>">Pro Massage</a>
<a href="category-details.php?id=<?php echo"Hair & Hairdressing";?>">Hair & Hairdressing</a>
<a href="category-details.php?id=<?php echo"Cosmetics & Skincare";?>">Cosmetics & Skincare</a>
<a href="category-details.php?id=<?php echo"Perfumes";?>">Perfumes</a>
<a href="category-details.php?id=<?php echo"Health & medicine";?>">Health & Medicine</a>
<a href="category-details.php?id=<?php echo"Beauty Accessories";?>">Beauty Accessories</a>
</div>
</div>
</td></tr>
</table>
</td>
<td width="70%" valign="top"><h3><?php echo $categoryid; ?></h3>
<div class="products-container">
<?php
$sqlquery="select pub_id, prod_name, category, unit_price, address from publication where sub_category='$categoryid'";
$result1=$conn->query($sqlquery);	
while($info=$result1->fetch_assoc())
{
$query2="select image from product_images where pub_id='".$info['pub_id']."'";
$result2=$conn->query($query2);
$info2=$result2->fetch_assoc();
?>

        <div class="items" style="min-width:172px;">
          <section class="img">
            <img src="<?php echo $info2['image'];?>" align="middle">
			
          </section>

          <section class="details">
            <b><table border="0" rules="rows" style="width:197px; margin-left:-15px; font-size:18px; text-align:center;"><tr style="background-color:#547392; width: 100%; color: gold;"><td><?php echo $info['prod_name'];?></td></tr></table></b>
            <br><br><br>
			<b>Price: <?php echo $info['unit_price'];?></b>
            <p><b>Location: <?php echo $info['address'];?></b></p>
            <a href="product.php?this=<?php echo $info['pub_id']; ?>" style="color:red; font-weight:bolder;">View More</a>
          </section>
        </div>
		
<?php
$categories=$info['category'];
}
?>
        
</div>
<h3>Other related product</h3>

<div class="products-container">
<?php
@$sqlquery="select pub_id, prod_name, unit_price, category, address from publication where category='$categories' and sub_category!='$categoryid'";
$result1=$conn->query($sqlquery);	
while($info=$result1->fetch_assoc())
{
$query2="select image from product_images where pub_id='".$info['pub_id']."'";
$result2=$conn->query($query2);
$info2=$result2->fetch_assoc();
?>

        <div class="items" style="min-width:172px;">
          <section class="img">
            <img src="<?php echo $info2['image'];?>" align="middle">
			
          </section>

          <section class="details">
            <b><table border="0" rules="rows" style="width:197px; margin-left:-15px; font-size:18px; text-align:center;"><tr style="background-color:#547392; width: 100%; color: gold;"><td><?php echo $info['prod_name'];?></td></tr></table></b>
            <br><br><br>
			<b>Price: <?php echo $info['unit_price'];?></b>
            <p><b>Location: <?php echo $info['address'];?></b></p>
            <a href="product.php?this=<?php echo $info['pub_id']; ?>" style="color:red; font-weight:bolder;">View More</a>
          </section>
        </div>
		
<?php
}
?>
        
</div>

</td>

</tr>
<tr><td colspan="3" style="height:auto;"><?php include_once 'footer.php'; ?></td></tr>
</table>


  <div class="header">
    <a href="About.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">About us</a>
    <a href="contact.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">contact us</a>
    <a href="sign-up.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">Sign up</a>
    <a href="index.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">Home</a>
    <img src="image/logohuz.png" class="image1" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>
<form action="program/login.php" method="post">
<div id="login-form">
<center>
<table border="0" style="width:98%;" align="center">
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><input type="text" name="" id="input-style" placeholder="Username"></td></tr>
<tr><td></td></tr>
<tr><td><input type="password" name="" id="input-style" placeholder="Password"></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td align="center"><input type="submit" name="" style="width:30%; height:35px;" value="Sign-in"></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
</center>
</div>
</form>
</body>
</html>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
