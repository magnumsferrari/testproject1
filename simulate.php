<?php
	include 'Car.php';

	echo "simulating car.\n";
	$car = new Car();
	$car->move_forward(2000, 4000);
	
	var_dump($car);	
?>
