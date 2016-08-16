<?php

namespace DIContainer;

class DIContainer extends Container
{
    public function set($id, $class)
    {
        $element = function () use ($class) {
            return new $class;
        };

        parent::set($id, $element);
    }
}
