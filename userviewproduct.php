<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key1=$_COOKIE['lkey'];
$k=$obj->userviewproduct($key1);
$smartyObj->assign("data",$k);

if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
    if(isset($_POST['search'])AND($_POST['search'])!=null)
    {
        $search=trim($_POST['search']);
       $r=$obj->productsearch($search,$key1);
        $smartyObj->assign("view",$r);

    }
    else
     echo "<script> alert('search is empty')</script>";
}
$smartyObj->display('subheader.tpl');
$smartyObj->display('userviewproduct.tpl');
$smartyObj->display('footer.tpl');
?>