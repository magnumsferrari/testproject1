<?php
class Car
{
	var $location_x;
	var $location_y;

	function __construct($mileage = null)
	{
		$mileage = 0;
	}

	function move_forward($num_x,$num_y)
	{
		$this->location_x += $num_x;
		$this->location_y += $num_y;
	}
}
	
?>
