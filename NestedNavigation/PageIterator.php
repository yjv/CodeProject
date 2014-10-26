<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 9:22 PM
 */

namespace Yjv\CodeProject\NestedNavigation;


use Yjv\CodeProject\NestedNavigation\Repository\PageRepository;

class PageIterator extends \ArrayIterator implements \RecursiveIterator
{
    /**
     * @var PageRepository
     */
    protected $pageRepository;

    public function __construct(array $pages, PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
        parent::__construct($pages);
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return (bool)count($this->pageRepository->findChildren($this->current()));
    }

    /**
     * @return PageIterator
     */
    public function getChildren()
    {
        return new static($this->pageRepository->findChildren($this->current()), $this->pageRepository);
    }
}