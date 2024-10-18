<?php /* Smarty version 2.6.26, created on 2022-05-22 11:35:12
         compiled from table.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Actions</th>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['o']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['o']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['o']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['o']['gender']; ?>
</td>
			<td><?php echo $this->_tpl_vars['o']['email']; ?>
</td>
			<td><a href="edit.php?key=<?php echo $this->_tpl_vars['o']['register_01key']; ?>
">Edit</a> <a href="delete.php?key=<?php echo $this->_tpl_vars['o']['register_01key']; ?>
">Delete</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	<a href="logout.php">logout</a>

</body>
</html>