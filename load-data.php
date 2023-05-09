<?php

require "config.php";

use App\Student;

try {
	Student::register('Richard', 'Male', '04/20/2021', 'Ben Riley', 'ben@riley.com', '19-B First Avenue', '0912-545-2913');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Albert',
			'gender' => 'Male',
			'birthdate' => '14/02/2020',
			'owner' => 'John Doe',
			'email' => 'john@doe.com',
			'address' => '182-A 1st Street Tagumpay',
			'contact_number' => '0905-425-5832'
		],
		[
			'name' => 'Sara',
			'gender' => 'Female',
			'birthdate' => '14/02/2019',
			'owner' => 'Lisa Burrow',
			'email' => 'lisa@burrow.com',
			'address' => '182-A 1st Street Tagumpay',
			'contact_number' => '0905-425-5832'
		]
	];
	Student::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

