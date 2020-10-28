<?php

namespace Framework;

class DiContainer
{
    private $instances = [];
    private $factoryConfig = [];

    public function __construct(array $config)
    {
        $this->factoryConfig = $config['factories'];
    }

    public function get($className)
    {
        if(isset($this->instances[$className])) {
            return $this->instances[$className];
        } else {
            return $this->createInstance($className);
        }
    }

    private function createInstance($className) {
        $this->instances[$className] = $this->factoryConfig[$className]::create($className, $this);
        return $this->instances[$className];
    }
}