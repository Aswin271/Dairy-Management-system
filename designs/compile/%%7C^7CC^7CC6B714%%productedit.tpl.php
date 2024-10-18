<?php /* Smarty version 2.6.26, created on 2022-09-03 06:54:12
         compiled from productedit.tpl */ ?>
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
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				 <td>PRODUCT CATEGORY</td>
				 <td><input type="text" name="category" value="<?php echo $this->_tpl_vars['d']['productcat']; ?>
"></td>
            </tr>
            <tr>
                 <td>PRODUCT NAME</td>
                 <td><input type="text" name="name" value="<?php echo $this->_tpl_vars['d']['productname']; ?>
"></td>
            </tr>
            <tr>    
                 <td>DETAIL</td>
                 <td><textarea name="details"> <?php echo $this->_tpl_vars['d']['details']; ?>
</textarea></td>
            </tr>
            <tr>     
                 <td>QUANTITY</td>
                 <td><input type="text" name="quantity" value="<?php echo $this->_tpl_vars['d']['quantity']; ?>
"></td>
            </tr>
            <tr>     
                 <td>IMAGE</td>
                 <td><input type="file" name="image" value="<?php echo $this->_tpl_vars['d']['image']; ?>
"></td>
                 <td><a href="imageedit.php?k=<?php echo $this->_tpl_vars['d']['pkey']; ?>
" class="btn btn-primary">Edit</a></td>
            </tr>
            <tr>     
                 <td>AMOUNT</td>
                 <td><textarea name="amount"><?php echo $this->_tpl_vars['d']['amount']; ?>
</textarea></td>
            </tr>
            <tr>
			<td></td><td><input type="submit" name="submit" value="Update" class="btn btn-primary"></td>
		</tr>
			<?php endforeach; endif; unset($_from); ?>
		</form>
	</table>
</body>
</html>