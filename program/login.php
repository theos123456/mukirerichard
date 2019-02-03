<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php ///////////////////////////////// Login program section ////////////////////////////////////

include('connection.php');
if(isset($_POST['signin']))
{
 if(isset($_POST['user']))
 {
  $user=$_POST['user'];
 }
 if(isset($_POST['pass']))
 {
  $pass=$_POST['pass'];
 }
 $sel1="select * from security where username='$user' and password='$pass'";
 $counted=$conn->query($sel1);
 if(@$counted->num_rows==0)
 {
 ?>
 <div id="message-cover">

 </div>
 <form action="login.php" method="post">
 <table id="message">
 <tr><td style="background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;"><b>Warning</b></td></tr>
 <tr><td style="padding:34px; color:#FFFFFF; font-weight:900; font-size:17px;">Invalid account! please verify your keystroke.</td></tr>
 <tr><td align="right" style="box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;">
 <input type="submit" value="Retry" name="retry" style="width:25%; opacity:0.5; height:35px; box-shadow: 0px 0px 1px 1px green;" />
 </td></tr>
 </table>
 </form>
 <?php
 }
 else if($counted->num_rows>1)
 {
 ?>
 <div id="message-cover">

 </div>
 <form action="login.php" method="post">
 <table id="message">
 <tr><td style="background-color: black; color:red; opacity:0.7; font-size:20px; box-shadow:0px 0px 2px 2px black;"><b>Warning</b></td></tr>
 <tr><td style="padding:34px; color:#FFFFFF; font-weight:900; font-size:17px;">Conflicting issue! please contact us for support.</td></tr>
 <tr><td align="right" style="box-shadow:0px 0px 2px 2px black; opacity:0.9; background-color:#000000;">
 <input type="submit" value="Retry" name="retry" style="width:25%; opacity:0.5; height:35px; box-shadow: 0px 0px 1px 1px green;" />
 </td></tr>
 </table>
 </form>
 <?php
 }
 else
 {
  session_start();
  $data1=$counted->fetch_assoc();
  $_SESSION['password']=$data1['password'];
  $sel2="select ssn, fname, lname, title, email, telephone, work_with from users where ssn='".$data1['ssn']."'";
  $exc1=$conn->query($sel2);
  $data2=$exc1->fetch_assoc();
  $_SESSION['ssn']=$data2['ssn'];
  $_SESSION['fname']=$data2['fname'];
  $_SESSION['lname']=$data2['lname'];
  $_SESSION['email']=$data2['email'];
  $_SESSION['telephone']=$data2['telephone'];
  $_SESSION['work_with']=$data2['work_with'];
  if($data2['title']=='Admin')
  {
   echo"<script>location.href='../admin.php';</script>";
   return false;
  }
  else
  {
   echo"<script>location.href='../publisher-welcome.php';</script>";
   return false;
  }
 }
 }
 
 //////////////////////////////////////////
 //////////////////////////////////////////////////////// Back to home then ///////////////////////////////////////
 //////////////////////////////////////////////////////////////////////////////////////////////////
 
 if(isset($_POST['retry']))
 {
  echo"<script>location.href='../index.php';</script>";
  return false;
 }
?>