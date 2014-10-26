<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 10:39 PM
 */

namespace Yjv\CodeProject\NestedNavigation\Tests\Repository;


use Yjv\CodeProject\NestedNavigation\Repository\PageRepository;

class PageRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  PageRepository */
    protected $repository;
    protected $pages;

    public function setUp()
    {
        $this->pages = include __DIR__.'/../Fixtures/pages.php';
        $this->repository = new PageRepository($this->pages);
    }

    public function testFindParent()
    {
        $this->assertSame($this->pages[2], $this->repository->findParent($this->pages[6]));
        $this->assertFalse($this->repository->findParent($this->pages[0]));
    }

    public function testFindChildren()
    {
        $this->assertSame(array($this->pages[7], $this->pages[8]), $this->repository->findChildren($this->pages[6]));
        $this->assertEmpty($this->repository->findChildren($this->pages[7]));
    }
}
 