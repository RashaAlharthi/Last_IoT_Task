<?php
$ssid = $_POST["ssid"];
$pass = $_POST["pass"];
if ($ssid === "SmartMethodsPoint" && $pass === "12345678"){
  header("Location: control-panel.php");
  exit();
} else {
header("Location: login.php?error=Incorect ssid or password");
exit();
}
 ?>
