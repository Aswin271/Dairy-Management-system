<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
if (isset($_POST['hide'])AND($_POST['hide'])=='h') 
{
	if(isset($_POST['category'])AND($_POST['category'])!=null)
	{
		if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			if(isset($_POST['amount'])AND($_POST['amount'])!=null)
			{
			    if(isset($_POST['quantity'])AND($_POST['quantity'])!=null)
				{
		            if(isset($_POST['details'])AND($_POST['details'])!=null)
				    {
			           
				       	 $category=trim($_POST['category']);
			             $name=trim($_POST['name']);
			             $amount=trim($_POST['amount']);
			             $quantity=trim($_POST['quantity']);
			             $details=trim($_POST['details']);
			             
			             $obj->productadd($category,$name,$amount,$quantity,$details,$_FILES['image'],$key);
		               }
		              
	                    else
	                    echo "<script> alert('details is empty')</script>";	
                      }
		              else
		              echo "<script> alert('quantity is empty')</script>";
		            }
		    		  else
		 		       echo "<script> alert('amount is empty')</script>"; 
		 			 }
		            else
		            echo "<script> alert('name is empty')</script>";
		            }
		         else
		         echo "<script> alert('category is empty')</script>"; 
		        }
		        $smartyObj->display('subheader.tpl');
$smartyObj->display('productadd.tpl');
$smartyObj->display('footer.tpl');