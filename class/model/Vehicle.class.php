<?php
/*
* @author: Naldson
* @version: 1.0
*/
class Vehicle 
{
	private $id;
	private $name;
	private $image;
	private $year;
	private $plate;

	public function __construct($name, $image, $year, $plate) 
	{
		$this->name = $name;
		$this->image = $image;
		$this->year = $year;
		$this->plate = $plate;
	}
    
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the value of image.
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Gets the value of year.
     *
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Gets the value of plate.
     *
     * @return mixed
     */
    public function getPlate()
    {
        return $this->plate;
    }
}