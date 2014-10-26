<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 10:59 PM
 */

namespace Yjv\CodeProject\NestedNavigation\Tests\Entity;


use Yjv\CodeProject\NestedNavigation\Entity\Page;

class PageTest extends \PHPUnit_Framework_TestCase
{

    public function testGetters()
    {
        $faker = \Faker\Factory::create();
        $id = $faker->randomNumber();
        $name = $faker->word;
        $content = $faker->paragraph();
        $parent = $faker->randomNumber();
        $page = new Page(
            $id,
            $name,
            $content,
            $parent
        );

        $this->assertEquals($id, $page->getId());
        $this->assertEquals($name, $page->getName());
        $this->assertEquals($content, $page->getContent());
        $this->assertEquals($parent, $page->getParent());
    }

    public function test__toString()
    {
        $faker = \Faker\Factory::create();
        $id = $faker->randomNumber();
        $name = $faker->word;
        $content = $faker->paragraph();
        $parent = $faker->randomNumber();
        $page = new Page(
            $id,
            $name,
            $content,
            $parent
        );

        $this->assertEquals(
            sprintf('{"id":%d,"name":"%s","content":"%s","parent":%d}', $id, $name, $content, $parent),
            (string)$page
        );
    }
}
 