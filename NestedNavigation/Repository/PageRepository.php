<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 9:13 PM
 */

namespace Yjv\CodeProject\NestedNavigation\Repository;


use Yjv\CodeProject\NestedNavigation\Entity\Page;

class PageRepository
{
    /**
     * @var Page[]
     */
    protected $pages = array();

    /**
     * @param Page[] $pages
     */
    public function __construct(array $pages)
    {
        $this->pages = $pages;
    }

    public function findParent(Page $page)
    {
        $parent = $page->getParent();

        foreach ($this->pages as $possibleParentPage) {

            if ($possibleParentPage->getId() == $parent) {

                return $possibleParentPage;
            }
        }

        return false;
    }

    public function findChildren(Page $page)
    {
        $id = $page->getId();

        return array_values(array_filter(
            $this->pages,
            function (Page $page) use ($id)
            {
                return $page->getParent() == $id;
            }
        ));
    }
} 