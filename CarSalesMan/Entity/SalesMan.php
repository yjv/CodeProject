<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 10:16 PM
 */
namespace Yjv\CodeProject\CarSalesMan\Entity;


class SalesMan 
{
    protected $id;
    protected $username;

    public function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = (string)$username;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}