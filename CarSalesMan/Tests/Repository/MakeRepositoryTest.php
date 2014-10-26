<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:20 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Tests\Repository;


use Yjv\CodeProject\CarSalesMan\Repository\MakeRepository;

class MakeRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  MakeRepository */
    protected $repository;

    public function setUp()
    {
        $this->repository = new MakeRepository();
    }

    public function testFindAll()
    {
        $this->repository->findAll();
    }

    public function testFindByName()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findByName($faker->word);
    }
}
 