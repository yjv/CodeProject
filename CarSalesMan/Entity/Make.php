<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 10:17 PM
 */
namespace CarSalesMan\Entity;


class Make 
{
    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
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
} 