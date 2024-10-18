<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->adminuserview();
$smartyObj->assign("data",$k);
$smartyObj->display('adminuserview.tpl');
?>