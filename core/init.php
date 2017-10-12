<?php 
$db =mysqli_connect('127.0.0.1','root','','shop');
if (mysqli_connect_error()) {
echo 'Database connection failed with following errors:'. mysql_connect_error();
die();
	
}
require_once $_SERVER['DOCUMENT_ROOT'].'/shop/config.php';
require_once BASEURL.'helpers/helpers.php';
 ?>