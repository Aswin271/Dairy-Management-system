<?php /* Smarty version 2.6.26, created on 2022-09-21 08:00:02
         compiled from feedback.tpl */ ?>
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
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="rating" class="form-control"></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name="comment" class="form-control"></textarea></td>
			</tr>
			<td></td><td><input type="submit" name="submit" class="btn btn-primary"></td>
		</form>
	</table>
</body>
</html>