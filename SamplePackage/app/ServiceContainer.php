<?php

namespace App;

class ServiceContainer
{
    protected $services = [];

    public function addService(string $name, $service)
    {
        $this->services[$name] = $service;
    }

    public function getServices($name)
    {
        if (isset($this->services[$name]))
    }
}
