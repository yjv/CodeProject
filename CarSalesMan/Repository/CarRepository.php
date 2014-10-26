<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 10:24 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Repository;


use Yjv\CodeProject\CarSalesMan\Entity\Make;
use Yjv\CodeProject\CarSalesMan\Entity\Model;
use Yjv\CodeProject\CarSalesMan\Entity\SalesMan;

class CarRepository
{
    /**
     * find all cars optionally filtered by a specific salesman
     *
     * @param SalesMan $salesMan
     */
    public function findAll(SalesMan $salesMan = null)
    {

    }

    /**
     * find all cars of a certain make optionally filtered by a specific salesman
     *
     * @param Make $make
     * @param SalesMan $salesMan
     */
    public function findAllByMake(Make $make, SalesMan $salesMan = null)
    {

    }

    /**
     * find all cars of a certain model optionally filtered by a salesman
     *
     * @param Model $model
     * @param SalesMan $salesMan
     */
    public function findAllByModel(Model $model, SalesMan $salesMan = null)
    {

    }

    /**
     * find all cars of a certain model optionally filtered by a salesman
     *
     * @param Model $model
     * @param $year
     * @param SalesMan $salesMan
     */
    public function findAllByModelAndYear(
        Model $model,
        $year,
        SalesMan $salesMan = null
    ) {

    }

    /**
     * find a car by it's id. if a salesmane is passed then even if it is found
     * it will only be returned if it is owned by the salesman
     *
     * @param $id
     * @param SalesMan $salesMan
     */
    public function findById($id, SalesMan $salesMan = null)
    {

    }
}