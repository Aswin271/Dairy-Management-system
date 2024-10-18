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
			{foreach from=$data item="d"}
			<tr>
				<input type="hidden" name="hide" value="h">
			</tr>
			<tr>
				<td>Complaint</td>
				<td><textarea name="complaint">{$d.complaint}</textarea>
				</td>
			</tr>
			<td></td><td><input type="submit" name="submit" value="Update" class="btn btn-primary"></td>
			{/foreach}
		</form>
	</table>
</body>
</html>