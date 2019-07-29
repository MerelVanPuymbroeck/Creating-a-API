<!DOCTYPE html>
<html>
<body>

<?php
$myObj->name = "Merel";
$myObj->age = 23;
$myObj->city = "Beveren";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
</body>
</html>