<?php
/*
* @author: Naldson
* @version: 1.0
*/

class Image
{
    private $name;
    
	public function generateDestination()
	{
		$name = time();
        $this->setName($name);
		$destination = "../public/img/vehicles/" . $name . ".jpg";
		return $destination;
	}

	public function save($image)
	{
    	$result = move_uploaded_file($image['tmp_name'], $this->generateDestination());
    	return $result;
	}

	public function deleteImage($destination)
	{
		unlink("../".$destination);
		var_dump($destination);
		if(unlink($destination)) {
			print_r(error_get_last());
		}
	}
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
}
