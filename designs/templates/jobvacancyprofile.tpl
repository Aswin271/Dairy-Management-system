<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2 align="center">JOB VACANCY EDITING</h2>
	<table align="center" class="table table-striped">
	<form method="post">
		{foreach from=$data item="d"}
		<tr><input type="hidden" name="hide" value="h">
		</tr>
		<tr>
			<td>JOB CATEGORY</td>
			<td><input type="text" name="jobcategory" class="form-control" value="{$d.jobcategory}"></td>
		</tr>
		<td>JOB NAME</td>
		<td>
			<input type="text" name="jobname" class="form-control" value="{$d.jobname}"> 
		</td>
		</tr>
		<tr>
			<td>JOB DISCRIPTION</td>
			<td>
				<textarea name="jobdescription" class="form-control">{$d.jobdescription}</textarea>
			</td>
		</tr>
		<tr>
			<td>SALARY</td>
			<td><input type="text" name="salary" class="form-control" value="{$d.salary}">
			</td>
		</tr>
		<tr>
			<td>LAST DATE FOR APPLY</td>
			<td><input type="text" name="lastdateforapply" class="form-control" value="{$d.lastdateforapply}"></td>
		</tr>
		<tr>
			<td>QUALIFICATION</td>
			<td><input type="text" name="qualification" class="form-control" value="{$d.qualification}">
			</td>
		</tr>
		<tr>
		     <td>
		     	<input type="submit" name="submit" value="update" class="btn btn-primary">
		     </td>	
		</tr>   
		{/foreach}  
</form>
</table>
</body>
</html>