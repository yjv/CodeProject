<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:12 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Tests\Entity;


use Yjv\CodeProject\CarSalesMan\Entity\Model;

class ModelTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $faker = \Faker\Factory::create();
        $id = $faker->randomNumber();
        $name = $faker->word;
        $make = \Mockery::mock('Yjv\CodeProject\CarSalesMan\Entity\Make');
        $model = new Model(
            $id,
            $name,
            $make
        );
        $this->assertEquals($id, $model->getId());
        $this->assertEquals($name, $model->getName());
        $this->assertSame($make, $model->getMake());
    }
}
 