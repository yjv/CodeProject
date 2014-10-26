<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:12 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Tests\Entity;


use Yjv\CodeProject\CarSalesMan\Entity\Make;

class MakeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $faker = \Faker\Factory::create();
        $name = $faker->word;
        $make = new Make($name);
        $this->assertEquals($name, $make->getName());
    }
}
 