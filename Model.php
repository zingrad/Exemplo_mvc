<?php

class Model 
{
    public $string;

    public function __construct(){
        $this->string = "Exemplo MVC";
    }

    public function get_string()
    {
        return $this->string;
    }
}