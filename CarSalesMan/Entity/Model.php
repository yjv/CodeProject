<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 10:17 PM
 */
namespace CarSalesMan\Entity;


class Model 
{
    protected $id;
    protected $make;

    public function __construct($id, Make $make)
    {
        $this->id = $id;
        $this->make = $make;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \Make
     */
    public function getMake()
    {
        return $this->make;
    }
} 