<?php /* Smarty version 2.6.26, created on 2022-09-21 08:01:06
         compiled from feedback_edit.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2 align="center">FEEDBACK</h2>
	<table align="center" class="table table-striped">
		<form method="post">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="rating" class="form-control" value="<?php echo $this->_tpl_vars['d']['rating']; ?>
"></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name="comment" class="form-control"><?php echo $this->_tpl_vars['d']['comment']; ?>
</textarea></td>
			</tr>
			<td></td><td><input type="submit" name="submit" class="btn btn-primary"></td>
			<?php endforeach; endif; unset($_from); ?>
		</form>
	</table>
</body>
</html>