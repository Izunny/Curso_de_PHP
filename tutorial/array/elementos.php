<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);
?>  

</pre>
</body>
</html>
