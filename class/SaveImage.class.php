<?php
/*
* @author: Naldson
* @version: 1.0
*/

class SaveImage
{
	private $image;

	public function __construct($image) 
	{
		$this->image = $image;
	}

	public function generateName()
	{
		$name = time();
		$destination = "public/img/vehicles/" . $name . ".jpg";
    	move_uploaded_file($this->image['tmp_name'], $destination);
    	return $destination;
	}
}