<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_GET['k'];
// $key=$_COOKIE['lkey'];
$k=$obj->review($key);
$smartyObj->assign("data",$k);
$smartyObj->display('usersubheader.tpl');
$smartyObj->display('review.tpl');
$smartyObj->display('footer.tpl');
?>