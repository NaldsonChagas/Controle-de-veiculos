<?php
/*
* @author: Naldson
* @version: 1.0
*/

class Image
{
	public function generateDestination()
	{
		$name = time();
		$destination = "../public/img/vehicles/" . $name . ".jpg";
		return $destination;
	}

	public function save($image)
	{
    	$result = move_uploaded_file($image['tmp_name'], $this->generateDestination());
    	return $result;
	}
}