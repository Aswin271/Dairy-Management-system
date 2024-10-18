<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2 align="center">PRODUCT EDIT</h2>
	<table align="center" class="table table-striped">
		<form method="post" action="" enctype="multipart/form-data">
			{foreach from=$data item="d"}
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				 <td>PRODUCT CATEGORY</td>
				 <td><input type="text" name="category" value="{$d.productcat}"></td>
            </tr>
            <tr>
                 <td>PRODUCT NAME</td>
                 <td><input type="text" name="name" value="{$d.productname}"></td>
            </tr>
            <tr>    
                 <td>DETAIL</td>
                 <td><textarea name="details"> {$d.details}</textarea></td>
            </tr>
            <tr>     
                 <td>QUANTITY</td>
                 <td><input type="text" name="quantity" value="{$d.quantity}"></td>
            </tr>
            <tr>     
                 <td>IMAGE</td>
                 <td><input type="file" name="image" value="{$d.image}"></td>
                 <td><a href="imageedit.php?k={$d.pkey}" class="btn btn-primary">Edit</a></td>
            </tr>
            <tr>     
                 <td>AMOUNT</td>
                 <td><textarea name="amount">{$d.amount}</textarea></td>
            </tr>
            <tr>
			<td></td><td><input type="submit" name="submit" value="Update" class="btn btn-primary"></td>
		</tr>
			{/foreach}
		</form>
	</table>
</body>
</html>