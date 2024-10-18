n<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
$k=$obj->complaintview($key);
$smartyObj->assign("data",$k);
$smartyObj->display('usersubheader.tpl');
$smartyObj->display('usercomplaintview.tpl');
$smartyObj->display('footer.tpl');
?>