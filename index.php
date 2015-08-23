<?php

$domain = array('easydrain.com' => 'easydrain', 'easydrain.nl' => 'easydrain');
$origin = array('http://localhost:9090/' => 'active', 'http://localhost:9090/' => 'active');

class Cache
{
}

class Request
{
    private $requestObject;
}

class Init
{
    private $conf;
    public function start()
    {
        echo $this->var;
    }
}
