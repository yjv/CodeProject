<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 10:17 PM
 */
namespace Yjv\CodeProject\CarSalesMan\Entity;


class Model 
{
    protected $id;
    protected $make;
    protected $name;

    public function __construct($id, $name, Make $make)
    {
        $this->id = $id;
        $this->name = $name;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return Make
     */
    public function getMake()
    {
        return $this->make;
    }
} 