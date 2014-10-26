<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 9:13 PM
 */

namespace Yjv\CodeProject\NestedNavigation\Entity;


class Page 
{
    protected $id;
    protected $name;
    protected $parent;
    protected $content;

    /**
     * @param int $id
     * @param string $name
     * @param string $content
     * @param int|null $parent
     */
    public function __construct($id, $name, $content, $parent = null)
    {
        $this->id = (int)$id;
        $this->name = $name;
        $this->content = $content;
        $this->parent = is_null($parent) ? $parent : (int)$parent;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function __toString()
    {
        return json_encode(array('id' => $this->id, 'name' => $this->name, 'content' => $this->content, 'parent' => $this->parent));
    }
}