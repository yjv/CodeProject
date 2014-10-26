<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 10:09 PM
 */
use Yjv\CodeProject\NestedNavigation\Entity\Page;

$faker = Faker\Factory::create();

return array(

    new Page(
        1,
        $faker->word,
        $faker->word
    ),
    new Page(
        2,
        $faker->word,
        $faker->word,
        1
    ),
    new Page(
        3,
        $faker->word,
        $faker->word,
        1
    ),
    new Page(
        4,
        $faker->word,
        $faker->word,
        1
    ),
    new Page(
        5,
        $faker->word,
        $faker->word,
        2
    ),
    new Page(
        6,
        $faker->word,
        $faker->word,
        2
    ),
    new Page(
        7,
        $faker->word,
        $faker->word,
        3
    ),
    new Page(
        8,
        $faker->word,
        $faker->word,
        7
    ),
    new Page(
        9,
        $faker->word,
        $faker->word,
        7
    )
);