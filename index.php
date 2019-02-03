<html>
<head><title>Huzion - Online Service</title>
<script type="text/javascript" src="js/autoload.js"> </script> <!---Calling to an external Province & District autoload--> 
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flags/flags.css">
	<link rel="stylesheet" href="css/flags/flags.min.css">
<body>
  
  <div class="div2"><img src="image/index.jpeg" class="image2"><img class="shop" src="image/shop.png" height="20px">
</div>

  <?php include_once 'search.php'; @session_start(); ?>

<table border="0" class="product-holder">
<tr>
<td width="250px" valign="top">
<div class="sidenav">
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
</td>
<td valign="top">

<div class="products-container">
<?php
require('program/connection.php');
$query2="select pub_id, prod_name, unit_price, address from publication";
$result2=$conn->query($query2);
while($info2=$result2->fetch_assoc())
{
$query1="select image from product_images where pub_id='".$info2['pub_id']."' order by id DESC";
$result1=$conn->query($query1);
$info1=$result1->fetch_assoc();
?>
        <div class="items" style="min-width:172px;">
          <section class="img">
            <img src="<?php echo $info1['image']; ?>" align="middle">
			
          </section>

          <section class="details" style="text-align:center;">
            <label><table border="0" rules="rows" style="width:197px; margin-left:-15px; font-size:18px; text-align:center;"><tr style="background-color:#547392; width: 100%;  color: gold;"><td><?php echo $info2['prod_name']; ?></td></tr></table></label>
            <br>

            <p><?php echo $info2['unit_price']; ?></p>
			<p><?php echo $info2['address']; ?></p>
            <a href="product.php?this=<?php echo $info2['pub_id']; ?>" style="color:red; font-weight:bolder;">View more</a>
          </section>
        </div>
<?php
}
?>
        
</div>

</td></tr>
<tr><td colspan="2" style="height:auto;"><?php include_once 'footer.php'; ?></td></tr>
</table>

  <div class="header">
    <a href="About.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">About us</a>
    <a href="contact.php" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">contact us</a>
    <a href="#" onMouseOver="javascript:document.getElementById('login-form').style.visibility='visible';">Login</a>
    <a href="sign-up.php"onmouseover="javascript:document.getElementById('login-form').style.visibility='hidden';">Sign up</a>
    <a href="#" style="color: red;" onMouseOver="javascript:document.getElementById('login-form').style.visibility='hidden';">Home</a>
    <img src="image/logohuz.png" class="image1" onMouseOver"javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>

<div id="cover">
</div>
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
