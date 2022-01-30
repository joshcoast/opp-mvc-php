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
		* 
		* $person1 = new Person();
		* $person1->set_name( 'Josh' );
		* echo $person1->name;
		* 
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

		$person1 = new Person( 'josh', 'brown', '45' );
		echo $person1->get_name();
		echo $person1->get_eye_color();
		echo $person1->get_age();
		$person1->set_name( 'bobby' );
		echo $person1->get_name();


	?>
</body>
</html>