<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 10:16 PM
 */
namespace Yjv\CodeProject\CarSalesMan\Entity;


class Car 
{
    protected $id;
    protected $salesMan;
    protected $model;
    protected $year;

    /**
     * @param mixed $id
     * @param Model $model
     * @param SalesMan $salesMan
     * @param int $year
     */
    public function __construct($id, Model $model, SalesMan $salesMan, $year)
    {
        $this->id = $id;
        $this->model = $model;
        $this->salesMan = $salesMan;
        $this->year = (int)$year;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return SalesMan
     */
    public function getSalesMan()
    {
        return $this->salesMan;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }
} 