<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->adminjobvacancyview();
$smartyObj->assign("data",$k);
$smartyObj->display('adminjobvacancyview.tpl');
?>