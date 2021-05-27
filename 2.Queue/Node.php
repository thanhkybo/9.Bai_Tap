<?php

class  Node
{
    public $value;
    public $next;

    function __construct($value)
    {
        $this->data = $value;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->value;
    }
}