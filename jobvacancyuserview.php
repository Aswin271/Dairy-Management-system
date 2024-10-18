<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->jobvacancyuserview();
$smartyObj->assign("data",$k);
$smartyObj->display('usersubheader.tpl');
$smartyObj->display('jobuserview.tpl');
$smartyObj->display('footer.tpl');
?>