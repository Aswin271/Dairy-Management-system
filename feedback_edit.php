<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_GET['k'];
$k=$obj->user_feedbackselect($key);
$smartyObj->assign("data",$k);
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
	if(isset($_POST['rating'])AND($_POST['rating'])!=null)
	{
		if(isset($_POST['comment'])AND($_POST['comment'])!=null)
		{
		$rating=trim($_POST['rating']);
		$comment=trim($_POST['comment']);
		$obj->feedback_edit($rating,$comment,$key);
		}
		else
   	 	echo "<script> alert('rating is empty')</script>";
   	}
   	else
    echo "<script> alert('comment is empty')</script>";
}
$smartyObj->display('usersubheader.tpl');
$smartyObj->display('feedback_edit.tpl');
$smartyObj->display('footer.tpl');
?>	