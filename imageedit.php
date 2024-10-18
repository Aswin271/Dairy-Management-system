<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();


$key=$_GET['key'];
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
	//echo "hai";exit;

			$obj->imageedit($_FILES['image'],$key);
	    
	
}
 $smartyObj->display('usersubheader.tpl');
$smartyObj->display('imageedit.tpl');
$smartyObj->display('footer.tpl');
?>