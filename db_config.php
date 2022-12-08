






<?php
date_default_timezone_set('Asia/Manila');
$DB_host = "184.168.100.57";
$DB_user = "zoeyvpn-user";
$DB_pass = "bTSF1r-l8iws";
$DB_name = "zoey-vpn";

$mysqli = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
if($mysqli->connect_error){
   die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>









