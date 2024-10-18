<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
	if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
	{
		$complaint=trim($_POST['complaint']);
		$obj->complaint($complaint,$key);
	}
	else
     echo "<script> alert('complaint is empty')</script>";
}
$smartyObj->display('subheader.tpl');
$smartyObj->display('complaints.tpl');
$smartyObj->display('footer.tpl');
?>	