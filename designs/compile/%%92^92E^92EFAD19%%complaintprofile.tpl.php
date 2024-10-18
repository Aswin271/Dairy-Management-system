<?php /* Smarty version 2.6.26, created on 2022-07-23 08:13:11
         compiled from complaintprofile.tpl */ ?>
n<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2 align="center">COMPLAINT EDITING</h2>
	<table align="center" class="table table-striped">
		<form method="post">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				<td>Complaint</td>
				<td><textarea name="complaint"><?php echo $this->_tpl_vars['d']['complaint']; ?>
</textarea>
				</td>
			</tr>
			<td></td><td><input type="submit" name="submit" value="Update" class="btn btn-primary"></td>
			<?php endforeach; endif; unset($_from); ?>
		</form>
	</table>
</body>
</html>