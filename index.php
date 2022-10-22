<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
</head>
<body>
	<div>
		<form action="./pro.php" method="post">
			<input type="text" placeholder="First Name" class="txt" name="Firstname">
			<input type="text" placeholder="Middle Name" class="txt" name="Middlename">
			<input type="text" placeholder="Last Name" class="txt" name="Lastname">
			<label> Select your gender: </label>
                        <select name="Gender">
                            <option value="gender">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>
			<input type="text" placeholder="Username" class="txt"name="UserName">
			<input type="password" placeholder="Password" class="txt" name="Password">
			<input type="password" placeholder="Confirm Password" class="txt" name="Cpass">
			<input type="submit" value="Create an Account" class="btn" name="btn-save">
		</form>
	</div>
</body>
</html>