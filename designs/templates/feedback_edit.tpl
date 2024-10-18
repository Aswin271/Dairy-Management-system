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
			{foreach from=$data item="d"}
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="rating" class="form-control" value="{$d.rating}"></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name="comment" class="form-control">{$d.comment}</textarea></td>
			</tr>
			<td></td><td><input type="submit" name="submit" class="btn btn-primary"></td>
			{/foreach}
		</form>
	</table>
</body>
</html>