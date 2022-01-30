<?php 
	include "inc/person.inc.php"
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
<body>
	<h1>My Rad Header</h1>

	<?php
		/*
		* Instantiate a class
		* Classes are the blueprints/templates of php objects. 
		* Classes don’t actually become objects until you do 
		* something called: instantiation.
		*
		* When you instantiate a class, you create an instance of 
		* it … thus creating the object.
		*
		* In other words, instantiation is the process of 
		* creating an instance of an object in memory. What 
		* memory? The server’s memory of course! 
		*/
		$person1 = new Person();
		$person1->set_name( 'Josh' );
		echo $person1->name;

		$person2 = new Person();
		$person2->set_name( 'Sir Francis the 3rd' );
		echo $person2->name;

	?>
</body>
</html>