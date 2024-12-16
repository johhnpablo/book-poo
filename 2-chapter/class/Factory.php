<?php

class Factory
{
    private $name;
    private $address;
    private $document;

    public function __construct($name, $address, $document)
    {
        $this->name = $name;
        $this->address = $address;
        $this->document = $document;
    }
    public function getName()
    {
        return $this->name;
    }
}