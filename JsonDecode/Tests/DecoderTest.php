<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:08 PM
 */

namespace Yjv\CodeProject\JsonDecode\Tests;


use Yjv\CodeProject\CarSalesMan\Entity\Make;
use Yjv\CodeProject\JsonDecode\Decoder;
use Yjv\CodeProject\NestedNavigation\Entity\Page;

class DecoderTest extends \PHPUnit_Framework_TestCase
{

    public function testDecode()
    {
        $decoder = new Decoder();

        $json = '{"id": 2, "name": "Nissan"}';
        $make = $decoder->decode('Yjv\CodeProject\CarSalesMan\Entity\Make', $json);

        $this->assertEquals(new Make(2, 'Nissan'), $make);

        $json = '{"id": 5, "name": "Page 1", "content": "This is some content", "parent": 7}';
        $page = $decoder->decode('Yjv\CodeProject\NestedNavigation\Entity\Page', $json);
        $this->assertEquals(new Page(5, 'Page 1', 'This is some content', 7), $page);
    }
}
 