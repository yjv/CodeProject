<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:20 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Tests\Repository;


use Yjv\CodeProject\CarSalesMan\Entity\Make;
use Yjv\CodeProject\CarSalesMan\Entity\Model;
use Yjv\CodeProject\CarSalesMan\Entity\SalesMan;
use Yjv\CodeProject\CarSalesMan\Repository\CarRepository;
use Yjv\CodeProject\CarSalesMan\Repository\ModelRepository;

class ModelRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ModelRepository */
    protected $repository;

    public function setUp()
    {
        $this->repository = new ModelRepository();
    }

    public function testFindAll()
    {
        $this->repository->findAll();
    }

    public function testFindAllByMake()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByMake(new Make($faker->randomNumber(), $faker->word));
    }

    public function testFindAllByModel()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByMake(new Make($faker->randomNumber(), $faker->word));
    }


    public function testFindByName()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findByMakeAndName(
            new Make($faker->randomNumber(), $faker->word),
            $faker->word
        );
    }
    public function testFindById()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findById($faker->randomNumber());
    }
}
 