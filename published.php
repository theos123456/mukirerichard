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
<div class="products-container">
<?php
require('program/connection.php');
$query2="select pub_id, prod_name, unit_price, address from publication where publisher='".$_SESSION['ssn']."' order by pub_date DESC";
$result2=$conn->query($query2);
while($info2=$result2->fetch_assoc())
{
$query1="select image from product_images where pub_id='".$info2['pub_id']."'";
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
<td>
<center>

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
    <a href="publisher-welcome.php" style="padding:12px;">Back</a>
    </td>
	</tr>
  </table>
    <img src="image/logohuz.png" class="image1" onMouseOver"javascript:document.getElementById('login-form').style.visibility='hidden';">
  </div>
</body>
</html>