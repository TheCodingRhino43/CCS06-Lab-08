<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" />	
	</div>
	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="Middle Name">
	</div>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" />	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" />	
	</div>
	<div>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" />	
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" id="birthdate" name="birthdate" />
	</div>
	<div>
		<label>Gender</label>
		<input type="checkbox" id="gender1" name="gender1" value="He/Him" />
		<label for="He/Him">He/Him</label><br>
		<input type="checkbox" id="gender2" name="gender2" value="She/Her" />
		<label for="She/Her">She/Her</label><br>
		<input type="checkbox" id="gender3" name="gender3" value="They/Them" />
		<label for="They/Them">They/Them</label>
	</div>
	<div>
		<label>Contact Number</label>
		<input type="tel" id="contact_number" name="contact_number" placeholder="1234-4567-890" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" />
	</div>
	<div>
		<button>
			Register User
		</button>	
	</div>
</form>
</body>
</html>