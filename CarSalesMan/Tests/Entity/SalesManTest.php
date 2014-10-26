<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:12 PM
 */

namespace Yjv\CodeProject\CarSalesMan\Tests\Entity;


use Yjv\CodeProject\CarSalesMan\Entity\SalesMan;

class SalesManTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $faker = \Faker\Factory::create();
        $id = $faker->randomNumber();
        $username = $faker->word;
        $firstName = $faker->word;
        $lastName = $faker->word;
        $model = new SalesMan(
            $id,
            $username,
            $firstName,
            $lastName
        );
        $this->assertEquals($id, $model->getId());
        $this->assertEquals($username, $model->getUsername());
        $this->assertEquals($firstName, $model->getFirstName());
        $this->assertEquals($lastName, $model->getLastName());
    }
}
 