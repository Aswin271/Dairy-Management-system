<?php /* Smarty version 2.6.26, created on 2022-09-25 08:28:34
         compiled from productadd.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product</title>
</head>
<body>
	<h2 align="center">PRODUCT</h2>
    <table align="center" class="table table-striped"></table>
    <form method="POST" action="" enctype="multipart/form-data">
    	<tr>
    		<input type="hidden" name="hide" value="h">
    	</tr>
    	<tr>
    		<td>Product Category</td>
    		<td><input type="text" name="category" class="form-control"></td>
    	</tr>
    	<tr>
    		<td>Product Name</td>
    		<td><input type="text" name="name" class="form-control"></td>
    	</tr>
    	<tr>
    		<td>Amount</td>
    		<td><input type="text" name="amount" class="form-control"></td>
    	</tr>
    	<tr>
    		<td>Quantity</td>
    		<td><input type="text" name="quantity" class="form-control"></td>
    	</tr>
    	<tr>
    		<td>Details</td>
    		<td><textarea name="details"></textarea></td>
    	</tr>
    	<tr>
    		<td>Image</td>
    		<td><input type="file" name="image"></td>
    	</tr>
    	<tr>
		     <Td>
		     	<input type="submit" name="submit" value="submit" class="btn btn-primary">
		     </Td>	
		</tr> 
    </form>
</body>
</html>