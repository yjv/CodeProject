<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:12 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Tests\Entity;


use Yjv\CodeProject\CarSalesMan\Entity\Car;

class CarTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $faker = \Faker\Factory::create();
        $id = $faker->randomNumber();
        $model = \Mockery::mock('Yjv\CodeProject\CarSalesMan\Entity\Model');
        $salesMan = \Mockery::mock(
            'Yjv\CodeProject\CarSalesMan\Entity\SalesMan'
        );
        $year = $faker->year;
        $car = new Car(
            $id,
            $model,
            $salesMan,
            $year
        );
        $this->assertEquals($id, $car->getId());
        $this->assertSame($model, $car->getModel());
        $this->assertSame($salesMan, $car->getSalesMan());
        $this->assertEquals($year, $car->getYear());
    }
}
 