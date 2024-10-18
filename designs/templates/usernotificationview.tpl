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
			{foreach from=$data item="d"}
			<tr>
				<td>{$d.notification}</td>
			</tr>
			{/foreach}
		</table>
	</form>
</body>
</html>