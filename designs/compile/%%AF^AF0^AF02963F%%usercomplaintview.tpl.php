<?php /* Smarty version 2.6.26, created on 2022-10-01 11:27:31
         compiled from usercomplaintview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<h2 align="center">COMPLAINTS</h2>
		<table class="table table-striped">
			<tr>
				<th>Complaints</th>
				<th></th>
				<th></th>
				<th>Reply</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['d']['complaint']; ?>
</td>
				<td><a href="complaintprofle.php?k=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-primary">Edit</a></td>
				<td><a href="complaintdelete.php?k=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-danger">Delete</a></td>
			
				<td><?php echo $this->_tpl_vars['d']['reply']; ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</body>
</html>