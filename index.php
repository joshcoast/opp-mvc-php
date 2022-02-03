<?php 
	require 'inc/auto_loader.php';
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
		echo '<br>';
		$house1 = new House( '9654 Ogden Ct', 'Green', '27' );
		// unset( $person2 );
		// echo $person2->get_name();
		echo $house1->get_street();

	?>
</body>
</html>
