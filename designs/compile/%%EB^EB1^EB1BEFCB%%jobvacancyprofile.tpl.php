<?php /* Smarty version 2.6.26, created on 2022-07-23 13:01:57
         compiled from jobvacancyprofile.tpl */ ?>
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
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
		<tr><input type="hidden" name="hide" value="h">
		</tr>
		<tr>
			<td>JOB CATEGORY</td>
			<td><input type="text" name="jobcategory" class="form-control" value="<?php echo $this->_tpl_vars['d']['jobcategory']; ?>
"></td>
		</tr>
		<td>JOB NAME</td>
		<td>
			<input type="text" name="jobname" class="form-control" value="<?php echo $this->_tpl_vars['d']['jobname']; ?>
"> 
		</td>
		</tr>
		<tr>
			<td>JOB DISCRIPTION</td>
			<td>
				<textarea name="jobdescription" class="form-control"><?php echo $this->_tpl_vars['d']['jobdescription']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td>SALARY</td>
			<td><input type="text" name="salary" class="form-control" value="<?php echo $this->_tpl_vars['d']['salary']; ?>
">
			</td>
		</tr>
		<tr>
			<td>LAST DATE FOR APPLY</td>
			<td><input type="text" name="lastdateforapply" class="form-control" value="<?php echo $this->_tpl_vars['d']['lastdateforapply']; ?>
"></td>
		</tr>
		<tr>
			<td>QUALIFICATION</td>
			<td><input type="text" name="qualification" class="form-control" value="<?php echo $this->_tpl_vars['d']['qualification']; ?>
">
			</td>
		</tr>
		<tr>
		     <td>
		     	<input type="submit" name="submit" value="update" class="btn btn-primary">
		     </td>	
		</tr>   
		<?php endforeach; endif; unset($_from); ?>  
</form>
</table>
</body>
</html>