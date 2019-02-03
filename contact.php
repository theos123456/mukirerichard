<html>
<head><title>Huzion - Contact</title>
<script type="text/javascript" src="js/autoload.js"> </script> <!---Calling to an external Province & District autoload--> 
<link rel="icon" href="image/logohuz.png" /> <!---display web icon on the header--> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flags/flags.css">
	<link rel="stylesheet" href="css/flags/flags.min.css">
<body>
  
  <div class="div2"><img src="image/index.jpeg" class="image2"><img class="shop" src="image/shop.png" height="20px"><h2 class="text1">Best online store for you !!</h2>
</div>
<table border="0" class="content-holder">
<tr>
<td>

<center><table border="0" width="80%" style="box-shadow:0px 0px 10px 0px green;">
<tr><th style=" font-size:24px;">Contact us</th></tr>
<tr><td><img src="image/logohuz.png"></td>

<td><i class="fa fa-map-marker"></i>&nbsp;&nbsp;KIGALI City, Makuza Building, Ground Floor, Room 120<br />
<i class="fa fa-phone"></i>&nbsp;&nbsp;+250788556189<br />
<i class="fa fa-envelope"></i>&nbsp;&nbsp;care@huzion.rw</td></tr>

<tr><td colspan="2"><p style="margin-left:50px;">If you did not find the answer of your question or you have a problem in our system,<br> Please chat with us using
the form below. We will answer you soon as possible.</p><br></td></tr>

<tr><td colspan="2">

<!----------------contact us form------->

<!-- Contact Us Form -->
<center><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id='contactusform' method="post" >
<input id="name" name="name" placeholder="Your Name" type="text" required>
<input id="email" name="e_mail" placeholder="Your Email" type="email" required>
<textarea id="msg" name="message" placeholder="Message" required></textarea>
<input type='hidden' value='Administrator' name='receiver'>
<input type='hidden' value='title' name='title'>
<input type='hidden' value='<?php echo date('H:i:s');?>' name='time'>
<input type='hidden' value='<?php echo date('D-d-M-Y');?>' name='date'><br>
<input type='submit' value='send' name='send' style="box-shadow:0px 0px 10px 0px green; text-align:center; cursor:pointer; background-color:#0099CC; border-radius:10px; font-family:Andalus; font-size:18px; font-weight:bold;">

</form></center>


<?php 


if(isset($_POST['send'])){

              $sender=$_POST['name'];
			  $sender_email=$_POST['e_mail'];
			  
			  $message=$_POST['message'];
			  $time=$_POST['time'];
			  $date=$_POST['date'];
			  
require('config/db_connection.php');


$sql="INSERT INTO message_tbl(sender_name, sender_email, message, time, date) VALUES ('$sender', '$sender_email', '$message', '$time', '$date')";
if ($conn->query($sql) === TRUE) {
     echo "<script type= 'text/javascript'>alert('Thanks Mr/Mrs $sender , for your message we will answer you,soon as possible');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<!-- Popup Div Ends Here -->


</td></tr>
</table></center>

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
</body>
</html>
