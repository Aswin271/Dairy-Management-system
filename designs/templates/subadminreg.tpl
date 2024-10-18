<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2 align="center">FARM REGISTRATION</h2>
	<table align="center" class="table table-striped">
	<form method="post">
		<tr><input type="hidden" name="hide" value="h">
		</tr>
		<tr>
			<td>Farm Name</td>
			<td><input type="text" name="name" class="form-control"></td>
		</tr>
		<td>Address</td>
		<td>
			<textarea name="address"></textarea> 
		</td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td>
				<input type="text" name="pincode" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" class="form-control"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><select name="district">
				<option>---SELECT---</option>
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
			<td><input type="text" name="city" class="form-control" ></td>
		</tr>
		<tr>
			<td>Registration Id</td>
			<td><input type="text" name="regid" class="form-control"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="form-control"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name="submit" value="Register" class="btn btn-primary"></td>
	</tr>
</form>
</table>
</body>
</html>