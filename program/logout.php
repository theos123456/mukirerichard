<?php
session_start();
session_destroy();

?>
<script>
               setTimeout(function go_(){location.href='../index.php'},100)
 </script>
 <?php
 return false;
 ?>