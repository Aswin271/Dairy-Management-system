<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['address'])AND($_POST['address'])!=null)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
			{
		       
			     if(isset($_POST['district'])AND($_POST['district'])!=null)
				 {
		            if(isset($_POST['city'])AND($_POST['city'])!=null)
				    {
			          if(isset($_POST['gender'])AND($_POST['gender'])!=null)
				      {
				      	 if(isset($_POST['contact'])AND($_POST['contact'])!=null)
			 			  {
				      	if(isset($_POST['email'])AND($_POST['email'])!=null)
				        {
				      	  if(isset($_POST['password'])AND($_POST['password'])!=null)
				          {
			                  $name=trim($_POST['name']);
			                  $address=trim($_POST['address']);
			                  $pincode=trim($_POST['pincode']);
			                  $district=trim($_POST['district']);
			                  $city=trim($_POST['city']);
			                  $gender=trim($_POST['gender']);
			                  $contact=trim($_POST['contact']);
			                  $email=trim($_POST['email']);
			                  $password=trim($_POST['password']);
			                   $obj->userreg($name,$address,$pincode,$contact,$district,$city,$email,$password,$gender);
		                  }
		                  else
		                  echo "<script> alert('password is empty')</script>";	
	                    }
	                    else
	                    echo "<script> alert('email is empty')</script>";	
                      }
		              else
		              echo "<script> alert('contact is empty')</script>";
		            }
		    		  else
		 		       echo "<script> alert('gender is empty')</script>"; 
		 			 }
		            else
		            echo "<script> alert('city is empty')</script>";
		            }
		         else
		         echo "<script> alert('district is empty')</script>"; 
		        
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
     $smartyObj->display('subheader.tpl');
$smartyObj->display('userreg.tpl');
$smartyObj->display('footer.tpl');

?>