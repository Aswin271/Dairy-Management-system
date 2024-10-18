<?php /* Smarty version 2.6.26, created on 2022-09-25 08:54:52
         compiled from subadminprofile.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2 align="center">PROFILE REGISTRATION</h2><br>
	<table align="center">
	<form method="post">
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
		<tr><input type="hidden" name="hide" value="h">
		</tr>
		<tr>
			<td>Farm Name</td>
			<td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['d']['name']; ?>
"></td>
		</tr>
		<td>Address</td>
		<td>
			<textarea name="address"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea> 
		</td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td>
				<input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" class="form-control"value="<?php echo $this->_tpl_vars['d']['contact']; ?>
"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><select name="district">
				<option><?php echo $this->_tpl_vars['d']['district']; ?>
</option>
				<!-- <option>---SELECT---</option> -->
				<option>Trivandrum</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alappuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Ernakulam</option>
				<option>Thrissur</option>
				<option>Palakkadu</option>
				<option>Malappuram</option>
				<option>Kozhikode</option>
				<option>Wayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option>
			</select></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['d']['city']; ?>
"></td>
		</tr>
		<tr>
			<td>Registration Id</td>
			<td><input type="text" name="regid" class="form-control"value="<?php echo $this->_tpl_vars['d']['regid']; ?>
"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="form-control"value="<?php echo $this->_tpl_vars['d']['email']; ?>
"></td>
		</tr>
		<!-- <tr>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control"></td>
		</tr> -->
		<tr>
			<td></td><td><input type="submit" name="submit" value="Edit" class="btn btn-primary"></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</form>
</table>
</body>
</html>