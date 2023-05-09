<?php

require "config.php";

use App\Student;

$pet_id = $_GET['id'];

$pet = Student::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<style>
	body{
		text-align: center;
		font-size: 46px;
		font-family: arial;
		background: linear-gradient(red, transparent),
		linear-gradient(to top left, yellow, transparent),
		linear-gradient(to top right, blue, transparent);
		background-blend-mode: screen;
	}

	h1{
		border: 40px;
		border-radius: 30px;
		background-color: #FF6941;
		outline-style: solid;
		outline-color: black;
	}

	input{
		height: 46px;
		width: 250px;
		border-radius: 30px;
		font-size: 16px;
	}
	
	button{
		height: 50px;
		width: 100px;
		font-size: 30px;
		font-weight: bold;
	}
</style>
<body>
<h1>Edit Pet</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Name of Pet:</label>
		<input type="text" name="name" placeholder="Name" value="<?php echo $pet->getName();?>" />	
	</div>
	<div>
		<label>Gender:</label>
		<input type="text" name="gender" placeholder="Gender" value="<?php echo $pet->getGender();?>" />	
	</div>
	<div>
		<label>Date of Birth:</label>
		<input type="date" name="birthdate" placeholder="Birth Date" value="<?php echo $pet->getBirthDate();?>" />	
	</div>
	<div>
		<label>Owner of Pet:</label>
		<input type="text" name="owner" placeholder="Owner" value="<?php echo $pet->getOwner();?>" />	
	</div>
	<div>
		<label>Email Address:</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmail();?>" />	
	</div>
	<div>
		<label>Address:</label>
		<input type="text" name="address" placeholder="Address" value="<?php echo $pet->getAddress();?>" />	
	</div>
	<div>
		<label>Contact Number:</label>
		<input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $pet->getContactNumber();?>" />	
	</div>
	<div>
		<button>
			Save
		</button><br>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>