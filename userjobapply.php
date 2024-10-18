<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$lid=$_COOKIE['lkey'];
$key=$_GET['key'];
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
$obj->userjobapply($_FILES['fileupload'],$lid,$key);
}
 $smartyObj->display('usersubheader.tpl');
$smartyObj->display('userjobapply.tpl');
$smartyObj->display('footer.tpl');
?> 