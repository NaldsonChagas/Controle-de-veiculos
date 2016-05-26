<?php
/*
* @author: Naldson
* @version: 1.0
*/
class Supply
{
    private $id;
    private $date;
    private $fuel;
    private $price;
    private $gasStaion;
    private $mileage;
    
    public function __construct($date, $fuel, $price, $gasStation, $mileage)
    {
        $this->date = $date;
        $this->fuel = $fuel;
        $this->price = $price;
        $this->gasStation = $gasStation;
        $this->mileage = $mileage;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id) 
    {
        $this->id = $id;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function getFuel()
    {
        return $this->fuel;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function getGasStation()
    {
        return $this->gasStation;
    }
    
    public function getMileage()
    {
        return $this->mileage;
    }
}