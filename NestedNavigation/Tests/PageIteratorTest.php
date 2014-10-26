<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 11:55 PM
 */

namespace Yjv\CodeProject\NestedNavigation\Tests;


use Yjv\CodeProject\NestedNavigation\PageIterator;
use Yjv\CodeProject\NestedNavigation\Repository\PageRepository;

class PageIteratorTest extends \PHPUnit_Framework_TestCase
{

    public function testChildrenMethods()
    {
        $pages = include __DIR__.'/Fixtures/pages.php';
        $pageRepository = new PageRepository($pages);
        $iterator = new PageIterator(array($pages[0]), $pageRepository);

        $iterator->rewind();
        $this->assertTrue($iterator->hasChildren());
        $childIterator = new PageIterator($pageRepository->findChildren(
            $pages[0]
        ), $pageRepository);
        $this->assertEquals(
            $childIterator,
            $iterator->getChildren()
        );
        $childIterator->rewind();
        $this->assertTrue($childIterator->hasChildren());
        $childIterator = $childIterator->getChildren();
        $childIterator->rewind();
        $this->assertFalse($childIterator->hasChildren());
    }
}
 