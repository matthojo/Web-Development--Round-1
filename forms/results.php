<?php 
$array = $_POST['checkA'];


 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forms</title>
  <meta name="author" content="Matthew Harrison-Jones">

</head>
<body>
  <div id="container">
   <?php
   	
   	foreach($array as $value){
   				echo "Value: ".$value."<br />";
   			}
   ?>
  </div>
</body>
</html>