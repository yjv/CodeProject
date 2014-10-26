<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 10:23 PM
 */

use Yjv\CodeProject\JsonDecode\Decoder;

require_once __DIR__ . '/vendor/autoload.php';

$decoder = new Decoder();

$json = '{"name": "Nissan"}';
$make = $decoder->decode('Yjv\CodeProject\CarSalesMan\Entity\Make', $json);
echo 'json: ', PHP_EOL, $json, PHP_EOL;
echo PHP_EOL;
echo 'Decoded as an instance of Yjv\CodeProject\CarSalesMan\Entity\Make:', PHP_EOL;
var_dump($make);
echo PHP_EOL;
echo PHP_EOL;

$json = '{"id": 5, "name": "Page 1", "content": "This is some content", "parent": 7}';
$make = $decoder->decode('Yjv\CodeProject\NestedNavigation\Entity\Page', $json);
echo 'json: ', PHP_EOL, $json, PHP_EOL;
echo PHP_EOL;
echo 'Decoded as an instance of Yjv\CodeProject\NestedNavigation\Entity\Page:', PHP_EOL;
var_dump($make);