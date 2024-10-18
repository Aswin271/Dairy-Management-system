<?php /* Smarty version 2.6.26, created on 2022-09-25 08:36:33
         compiled from usernotificationview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<h2 align="center">NOTIFICATIONS</h2>
		<table class="table table-striped">
			<tr>
				<th>Notifications</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['d']['notification']; ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</body>
</html>