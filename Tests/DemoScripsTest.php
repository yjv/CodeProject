<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/26/14
 * Time: 12:48 AM
 */

class DemoScripsTest extends \PHPUnit_Framework_TestCase
{
    public function testShowNestedPages()
    {
        $process = \Symfony\Component\Process\ProcessBuilder::create(array(
            'php',
            __DIR__.'/../show_nested_pages.php'
        ))->getProcess();
        $this->assertSame(0, $process->run(), 'show_nested_pages.php script failed.');
    }

    public function testDecodeObjects()
    {
        $process = \Symfony\Component\Process\ProcessBuilder::create(array(
            'php',
            __DIR__.'/../decode_objects.php'
        ))->getProcess();
        $this->assertSame(0, $process->run(), 'decode_objects.php script failed.');
    }
}