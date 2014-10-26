<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 9:27 PM
 */
$loader = require_once __DIR__ . '/vendor/autoload.php';

use Yjv\CodeProject\NestedNavigation\PageIterator;
use Yjv\CodeProject\NestedNavigation\Repository\PageRepository;

$pages = include __DIR__ . '/NestedNavigation/Tests/Fixtures/pages.php';

$pageRepository = new PageRepository($pages);

$iterator = new \RecursiveTreeIterator(new PageIterator(array($pages[0]), $pageRepository));

foreach ($iterator as $page) {

    echo $page, PHP_EOL;
}