<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
 $key=$_COOKIE['lkey'];
$k=$obj->subadminselect($key);
$smartyObj->assign("data",$k);
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['address'])AND($_POST['address'])!=null)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
			{
		       if(isset($_POST['contact'])AND($_POST['contact'])!=null)
			   { 
			     if(isset($_POST['district'])AND($_POST['district'])!=null)
				 {
		            if(isset($_POST['city'])AND($_POST['city'])!=null)
				    {
			          if(isset($_POST['regid'])AND($_POST['regid'])!=null)
				      {
				      	if(isset($_POST['email'])AND($_POST['email'])!=null)
				        {
				      	  // if(isset($_POST['password'])AND($_POST['password'])!=null)
				         //  {
			                  $name=trim($_POST['name']);
			                  $address=trim($_POST['address']);
			                  $pincode=trim($_POST['pincode']);
			                  $contact=trim($_POST['contact']);
			                  $district=trim($_POST['district']);
			                  $city=trim($_POST['city']);
			                  $regid=trim($_POST['regid']);
			                  $email=trim($_POST['email']);
			                  // $password=trim($_POST['password']);
			                   $obj->subadminprofile($name,$address,$pincode,$contact,$district,$city,$regid,$email,$key);
		                  // }
		                  // else
		                  // echo "<script> alert('password is empty')</script>";	
	                    }
	                    else
	                    echo "<script> alert('email is empty')</script>";	
                      }
		              else
		              echo "<script> alert('regid is empty')</script>";
		            }
		            else
		            echo "<script> alert('city is empty')</script>";
		            }
		         else
		         echo "<script> alert('district is empty')</script>"; 
		         }
		      else
		      echo "<script> alert('contact is empty')</script>"; 
		      }
		   else
		   echo "<script> alert('pincode is empty')</script>";	
		   }
		else
		echo "<script> alert('address is empty')</script>";
		}
     else
     echo "<script> alert('name is empty')</script>";
     }
     $smartyObj->display('farmsubheader.tpl');
$smartyObj->display('subadminprofile.tpl');
$smartyObj->display('footer.tpl');
?>