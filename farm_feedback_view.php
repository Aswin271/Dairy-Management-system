<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_GET['k'];
$id1=$_COOKIE['lkey'];
$k=$obj->farm_feedback_view($key,$id1);
$smartyObj->assign("data",$k);
$smartyObj->display('farmsubheader.tpl');
$smartyObj->display('farm_feedback_view.tpl');
$smartyObj->display('footer.tpl');
?>