<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/23/14
 * Time: 11:21 PM
 */

namespace Yjv\CodeProject\JsonDecode;


class Decoder 
{
    /**
     * @var \ReflectionProperty[]
     */
    protected $reflectionProperties = array();
    /**
     * @var \ReflectionClass[]
     */
    protected $reflectionClasses = array();

    public function decode($class, $json)
    {
        $object = $this->getNewInstance($class);

        foreach ($this->decodeJson($json) as $key => $value) {

            $this->getReflectionProperty($class, $key)->setValue($object, $value);
        }

        return $object;
    }

    /**
     * @param $class
     * @param $name
     * @return \ReflectionProperty
     */
    protected function getReflectionProperty($class, $name)
    {
        if (!isset($this->reflectionProperties[$class][$name])) {

            $this->reflectionProperties[$class][$name] = $reflectionProperty = new \ReflectionProperty($class, $name);
            $reflectionProperty->setAccessible(true);
        }

        return $this->reflectionProperties[$class][$name];
    }

    protected function decodeJson($json)
    {
        $data = json_decode($json);

        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                return $data;
            case JSON_ERROR_DEPTH:
                throw new \RuntimeException('Could not decode JSON, maximum stack depth exceeded.');
            case JSON_ERROR_STATE_MISMATCH:
                throw new \RuntimeException('Could not decode JSON, underflow or the nodes mismatch.');
            case JSON_ERROR_CTRL_CHAR:
                throw new \RuntimeException('Could not decode JSON, unexpected control character found.');
            case JSON_ERROR_SYNTAX:
                throw new \RuntimeException('Could not decode JSON, syntax error - malformed JSON.');
            case JSON_ERROR_UTF8:
                throw new \RuntimeException('Could not decode JSON, malformed UTF-8 characters (incorrectly encoded?)');
            default:
                throw new \RuntimeException('Could not decode JSON.');
        }
    }

    /**
     * this method is used to get a new instance of an object without calling its constructor
     * since the ReflectionClass::newInstanceWithoutConstructor method was only
     * added in php 5.4 we need to do it this way to keep it compatible with php 5.3
     *
     * @param $class
     * @return object
     */
    protected function getNewInstance($class)
    {
        $object = unserialize(
            sprintf('O:%d:"%s":0:{}', strlen($class), $class)
        );
        return $object;
    }
}