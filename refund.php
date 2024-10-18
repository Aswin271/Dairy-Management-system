<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_GET['k'];
$amount=$_GET['amount'];
$contact=$_GET['contact'];
$obj->refund($key,$amount,$contact);

?>