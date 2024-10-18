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
			{foreach from=$data item="d"}
			<tr>
				<td>{$d.complaint}</td>
				<td><a href="complaintprofle.php?k={$d.ckey}" class="btn btn-primary">Edit</a></td>
				<td><a href="complaintdelete.php?k={$d.ckey}" class="btn btn-danger">Delete</a></td>
			
				<td>{$d.reply}</td>
			</tr>
			{/foreach}
		</table>
	</form>
</body>
</html>