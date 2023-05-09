<?php

require "config.php";

use App\Student;

$pets = Student::list();
?>
<style>
	body{
		background:
        linear-gradient(red, transparent),
        linear-gradient(to top left, lime, transparent),
        linear-gradient(to top right, blue, transparent);
    	background-blend-mode: screen;
	}

	h1{
		text-align: center;
		font-size: 70px;
		font-family: arial;
	}

	table{
		text-align: center;
		margin-left: auto;
		margin-right:auto;
		font-size: 25px;
		border-radius: 20px;
		padding:16px;
		background-color: white;
	}

	button{
		display: flex;
  		justify-content: center;
  		align-items: center;
	}

	.deleteTable{
		text-align: center;
		font-size: 30px;
		padding: 20px;
	}
</style>
<body>
<h1>Pets</h1>

<table border="1" cellpadding="5">
<?php foreach ($pets as $pet): ?>
<tr>
<td><?php echo $pet->getId(); ?></td>
<td><?php echo $pet->getName(); ?></td>
<td><?php echo $pet->getGender(); ?></td>
<td><?php echo $pet->getBirthDate(); ?></td>
<td><?php echo $pet->getOwner(); ?></td>
<td><?php echo $pet->getEmail(); ?></td>
<td><?php echo $pet->getAddress(); ?></td>
<td><?php echo $pet->getContactNumber(); ?></td>
<td>
	<a href="edit-student.php?id=<?php echo $pet->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-student.php?id=<?php echo $pet->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
</table>
<div class = "deleteTable">
<a href="truncate-table.php">Delete Record</a><br>
<a href="create-table.php">Create New Table</a>
</div>
</body>