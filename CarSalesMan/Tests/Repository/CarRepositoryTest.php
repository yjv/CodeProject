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

class CarRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  CarRepository */
    protected $repository;

    public function setUp()
    {
        $this->repository = new CarRepository();
    }

    public function testFindAllByMake()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByMake(new Make($faker->randomNumber(), $faker->word));
    }

    public function testFindAllByMakeWithSalesMan()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByMake(
            new Make($faker->randomNumber(), $faker->word),
            new SalesMan($faker->randomNumber(), $faker->word, $faker->word, $faker->word)
        );
    }

    public function testFindAllByModel()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByModel(new Model(
            $faker->randomNumber(),
            $faker->word,
            new Make($faker->randomNumber(), $faker->word)
        ));
    }

    public function testFindAllByModelWithSalesMan()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByModel(
            new Model(
                $faker->randomNumber(),
                $faker->word,
                new Make($faker->randomNumber(), $faker->word)
            ),
            new SalesMan($faker->randomNumber(), $faker->word, $faker->word, $faker->word)
        );
    }

    public function testFindAllByModelAndYear()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByModelAndYear(
            new Model(
                $faker->randomNumber(),
                $faker->word,
                new Make($faker->randomNumber(), $faker->word)
            ),
            $faker->year
        );
    }

    public function testFindAllByModelAndYearWithSalesMan()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findAllByModelAndYear(
            new Model(
                $faker->randomNumber(),
                $faker->word,
                new Make($faker->randomNumber(), $faker->word)
            ),
            $faker->year,
            new SalesMan($faker->randomNumber(), $faker->word, $faker->word, $faker->word)
        );
    }

    public function testFindAllById()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findById($faker->randomNumber());
    }

    public function testFindAllByIdWithSalesMan()
    {
        $faker = \Faker\Factory::create();
        $this->repository->findById(
            $faker->randomNumber(),
            new SalesMan($faker->randomNumber(), $faker->word, $faker->word, $faker->word)
        );
    }
}
 