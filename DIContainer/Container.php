<?php

namespace DIContainer;

class Container
{
    protected $elements = [];

    public function __construct($elements = [])
    {
        $this->elements = $elements;
    }

    public function set($id, callable $element)
    {
        $this->elements[$id] = $element;
    }

    public function get($id)
    {
        return $this->elements[$id]->__invoke();
    }

    public function __invoke($id)
    {
        return $this->elements[$id]->__invoke();
    }

    private function __clone()
    {
    }
}